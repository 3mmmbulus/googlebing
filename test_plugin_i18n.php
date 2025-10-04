<?php
// 测试插件国际化功能

define('CLOUDSUO', true);
define('DS', DIRECTORY_SEPARATOR);
define('PATH_ROOT', __DIR__ . DS);
define('PATH_PLUGINS', PATH_ROOT . 'cl-plugins' . DS);

// 模拟站点语言设置
class MockSite {
    private $language = 'zh_CN'; // 可以改为 'en' 测试英文
    
    public function language() {
        return $this->language;
    }
    
    public function setLanguage($lang) {
        $this->language = $lang;
    }
}

$site = new MockSite();

// 加载插件类
include('cl-kernel/abstract/plugin.class.php');

// 测试About插件
class pluginAbout extends Plugin {
    public function init() {
        $this->dbFields = array(
            'label' => 'About',
            'text' => ''
        );
    }
}

echo "=== 测试插件国际化功能 ===\n\n";

// 测试中文
echo "当前语言设置：中文 (zh_CN)\n";
$about = new pluginAbout();
echo "插件名称: " . $about->name() . "\n";
echo "插件描述: " . $about->description() . "\n\n";

// 测试英文
echo "当前语言设置：英文 (en)\n";
$site->setLanguage('en');
$about2 = new pluginAbout();
echo "插件名称: " . $about2->name() . "\n";
echo "插件描述: " . $about2->description() . "\n\n";

// 测试其他语言（应该回退到英文）
echo "当前语言设置：法语 (fr_FR)\n";
$site->setLanguage('fr_FR');
$about3 = new pluginAbout();
echo "插件名称: " . $about3->name() . "\n";
echo "插件描述: " . $about3->description() . "\n";