-- 初始密码
-- use mysql;
-- UPDATE user SET authentication_string='' WHERE User='root';
-- FLUSH PRIVILEGES;
-- ALTER user 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '123456';
-- FLUSH PRIVILEGES;

-- 数据库名字 blog_dj
use blog_dj;
alter database `blog_dj` default character set utf8;

-- 表: 文章表 评论表

-- 文章主要信息
CREATE TABLE IF NOT EXISTS `blog_passage` (
    `id`            INT AUTO_INCREMENT,                     -- id 自增
    `title`         VARCHAR(300) DEFAULT NULL,              -- 文章标题（字符串）
    `category`      VARCHAR(300) DEFAULT NULL,              -- 分类（字符串）
    `tag`           VARCHAR(300) NOT NULL,                  -- 标签（字符串）
    `create_time`   VARCHAR(20) NOT NULL,                   -- 创建时间（字符串）
    `update_time`   VARCHAR(20) NOT NULL,                   -- 更新时间（字符串）
    `status         INT(2) NOT NULL,                        -- 是否上线（数字）可能会扩展
    `view_count`    INT DEFAULT 0,                          -- 文章阅读量
    `content`       MEDIUMBLOB NOT NULL,                    -- 內容（字符串，以HTML或XML 保存）
    `has_comment`   INT(2) DEFAULT 0,                       -- 是否有评论
    `image`         TEXT,                                   -- 图片id+图片名
    UNIQUE KEY (`title`),
    PRIMARY KEY (`id`)
);


-- 文章评论
CREATE TABLE IF NOT EXISTS `blog_comment` (
    `id`            INT AUTO_INCREMENT,                     -- id 自增
    `uid`           INT NOT NULL,                           -- 用户ID
    `pid`           INT NOT NULL,                           -- 文章ID
    `sess`          INT(8) NOT NULL,                        -- sess + 文章ID 确定评论对话,根据parent排序
    `root`          INT(1) NOT NULL,                        -- 是否根评论
    `dex`           INT(8) NOT NULL,                        -- 一个 session 内排序
    `context`       TEXT NOT NULL,                          -- 评论内容
    UNIQUE KEY (`sess`),
    PRIMARY KEY (`id`)
);

-- 分类、标签分析
CREATE TABLE IF NOT EXISTS `blog_tag` (
    `id`            INT AUTO_INCREMENT,                     -- id 自增
    `name`          VARCHAR(300) NOT NULL,                  -- 标签名
    `tp`            INT(2) NOT NULL,                        -- 确定是分类/标签
    `pnum`          INT DEFAULT 0,                          -- 文章数
    UNIQUE KEY (`name`),
    PRIMARY KEY (`id`)
);

-- 用户
CREATE TABLE IF NOT EXISTS `blog_user` (
    `id`            INT AUTO_INCREMENT,                     -- id 自增
    `name`          VARCHAR(300) NOT NULL,                  -- 用户名
    `nview`         INT DEFAULT 0,                          -- 访问次数
    `ns`            INT DEFAULT 0,                          -- 打赏次数
    `nds`           INT DEFAULT 0,                          -- 打赏数
    `other`         TEXT DEFAULT NULL,                      -- 附加信息 json 格式，qq、微信、邮箱、活动区域
    UNIQUE KEY (`name`),
    PRIMARY KEY (`id`)
);

-- 配置
CREATE TABLE IF NOT EXISTS `blog_option` (
    `id`            INT AUTO_INCREMENT,                     -- id 自增
    `key`           VARCHAR(300) NOT NULL,                  -- 键
    `value`         TEXT NOT NULL,                          -- 值
    UNIQUE KEY (`key`),
    PRIMARY KEY (`id`)
);

-- 图片
CREATE TABLE IF NOT EXISTS `blog_picture` (
    `id`            INT AUTO_INCREMENT,                     -- id 自增
    `key`           VARCHAR(300) NOT NULL,                  -- 图片名
    `content`       MEDIUMBLOB NOT NULL,                    -- 图片内容
    UNIQUE KEY (`key`),
    PRIMARY KEY (`id`)
);


alter table `blog_tag` default character set utf8;
alter table `blog_user` default character set utf8;
alter table `blog_option` default character set utf8;
alter table `blog_passage` default character set utf8;
alter table `blog_comment` default character set utf8;
alter table `blog_picture` default character set utf8;
