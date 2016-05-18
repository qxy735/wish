<?php

/**
 * YuYi WorkRoom
 *
 * @version 1.1.0
 * @author  QIXIEYU
 */
class IndexController extends Controller
{
    /**
     * 定义表情符号需要替换的表情图片地址
     *
     * @var array
     */
    public $faces = array(
        '[抓狂]' => 'zhuakuang',
        '[抱抱]' => 'baobao',
        '[害羞]' => 'haixiu',
        '[酷]' => 'ku',
        '[嘻嘻]' => 'xixi',
        '[太开心]' => 'taikaixin',
        '[钱]' => 'qian',
        '[花心]' => 'huaxin',
        '[挤眼]' => 'jiyan',
    );

    /**
     * 显示许愿墙
     *
     * @return mixed
     */
    public function index()
    {
        // 获取许愿信息
        $wishs = WishModel::get(['id', 'uid', 'content', 'time']);

        $pics = array_map(function ($face) {
            $path = RESOURCE_URL . "/image/phiz/{$face}.gif";

            $face = "<img src='{$path}'/>";

            return $face;
        }, $this->faces);

        // 转换表情符号
        $wishs = array_map(function ($wish) use ($pics) {
            $wish['content'] = str_replace(array_keys($pics), array_values($pics), $wish['content']);

            return $wish;
        }, $wishs);

        // 卸载空闲变量
        unset($pics);

        // 传入许愿信息
        $this->assign('wishs', $wishs);

        // 载入许愿墙首页
        return $this->display('index.html');
    }

    /**
     * 记录许愿信息
     *
     * @return mixed
     */
    public function wish()
    {
        // 获取许愿的内容
        $content = Input::get('content', '');

        // 定义需要添加的字段信息
        $insters = array(
            'uid' => 0,
            'content' => $content,
            'time' => time(),
            'createtime' => time(),
            'creator' => 'sys',
            'lastoperate' => time(),
            'lastoperator' => 'sys',
        );

        // 添加许愿信息
        $result = WishModel::create($insters);

        // 判断添加是否成功
        if (!$result) {
            return $this->error('许愿失败!', '/', 2);
        }

        // 许愿成功
        return $this->success('许愿成功!', '/', 2);
    }
}