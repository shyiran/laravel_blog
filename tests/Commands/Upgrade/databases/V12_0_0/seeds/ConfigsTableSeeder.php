<?php

declare(strict_types=1);

namespace Tests\Commands\Upgrade\Databases\V12_0_0\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('configs')->truncate();

        DB::table('configs')->insert([
            [
                'id'         => 101,
                'name'       => 'app.name',
                'value'      => '白俊遥博客',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 102,
                'name'       => 'bjyblog.head.keywords',
                'value'      => '个人博客,博客模板,thinkphp,laravel博客,php博客,技术博客,白俊遥',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 103,
                'name'       => 'bjyblog.head.description',
                'value'      => '白俊遥的php博客,个人技术博客,bjyblog,bjyadmin官方网站',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 107,
                'name'       => 'bjyblog.water.text',
                'value'      => 'baijunyao.com',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 109,
                'name'       => 'bjyblog.water.size',
                'value'      => '15',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 110,
                'name'       => 'bjyblog.water.color',
                'value'      => '#008CBA',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 117,
                'name'       => 'bjyblog.icp',
                'value'      => '豫ICP备14009546号-3',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 118,
                'name'       => 'bjyblog.admin_email',
                'value'      => 'baijunyao@baijunyao.com',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 119,
                'name'       => 'bjyblog.copyright_word',
                'value'      => '本文为白俊遥原创文章,转载无需和我联系,但请注明来自<a href="http://baijunyao.com">白俊遥博客</a>http://baijunyao.com',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 123,
                'name'       => 'bjyblog.statistics',
                'value'      => '',
                'created_at' => '2018-08-25 17:04:02',
                'updated_at' => '2018-08-25 17:04:02',
                'deleted_at' => null,
            ],
            [
                'id'         => 125,
                'name'       => 'bjyblog.author',
                'value'      => '白俊遥',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 128,
                'name'       => 'bjyblog.baidu_site_url',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 141,
                'name'       => 'bjyblog.alt_word',
                'value'      => '白俊遥博客',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 142,
                'name'       => 'mail.mailers.smtp.host',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 143,
                'name'       => 'mail.mailers.smtp.username',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 144,
                'name'       => 'mail.mailers.smtp.password',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 145,
                'name'       => 'mail.from.name',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 148,
                'name'       => 'bjyblog.notification_email',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 149,
                'name'       => 'bjyblog.head.title',
                'value'      => '白俊遥博客,技术博客,个人博客模板, php博客系统',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 150,
                'name'       => 'bjyblog.qq_qun.article_id',
                'value'      => '1',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 151,
                'name'       => 'bjyblog.qq_qun.number',
                'value'      => '88199093',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 152,
                'name'       => 'bjyblog.qq_qun.code',
                'value'      => '<a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=bba3fea90444ee6caf1fb1366027873fe14e86bada254d41ce67768fadd729ee"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="白俊遥博客群" title="白俊遥博客群"></a>',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 153,
                'name'       => 'bjyblog.qq_qun.or_code',
                'value'      => '/images/default/qr_code.png',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 154,
                'name'       => 'mail.default',
                'value'      => 'smtp',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 155,
                'name'       => 'mail.mailers.smtp.port',
                'value'      => '465',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 156,
                'name'       => 'mail.mailers.smtp.encryption',
                'value'      => 'ssl',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 157,
                'name'       => 'mail.from.address',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 158,
                'name'       => 'sentry.dsn',
                'value'      => '',
                'created_at' => '2018-08-22 21:03:01',
                'updated_at' => '2018-08-22 21:03:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 159,
                'name'       => 'database.connections.mysql.dump.dump_binary_path',
                'value'      => '/bin/',
                'created_at' => '2018-12-03 21:39:22',
                'updated_at' => '2018-12-03 21:39:22',
                'deleted_at' => null,
            ],
            [
                'id'         => 160,
                'name'       => 'filesystems.disks.oss_backups.access_key',
                'value'      => '',
                'created_at' => '2018-12-04 22:29:52',
                'updated_at' => '2018-12-04 22:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 161,
                'name'       => 'filesystems.disks.oss_backups.secret_key',
                'value'      => '',
                'created_at' => '2018-12-04 22:29:52',
                'updated_at' => '2018-12-04 22:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 162,
                'name'       => 'filesystems.disks.oss_backups.bucket',
                'value'      => '',
                'created_at' => '2018-12-04 22:29:52',
                'updated_at' => '2018-12-04 22:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 163,
                'name'       => 'filesystems.disks.oss_backups.endpoint',
                'value'      => '',
                'created_at' => '2018-12-04 22:29:52',
                'updated_at' => '2018-12-04 22:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 164,
                'name'       => 'backup.backup.destination.disks',
                'value'      => '[]',
                'created_at' => '2018-12-04 22:29:52',
                'updated_at' => '2018-12-04 22:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 165,
                'name'       => 'backup.notifications.mail.to',
                'value'      => '',
                'created_at' => '2018-12-04 22:29:52',
                'updated_at' => '2018-12-04 22:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 166,
                'name'       => 'app.locale',
                'value'      => 'en',
                'created_at' => '2019-02-26 21:10:52',
                'updated_at' => '2019-02-26 21:10:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 167,
                'name'       => 'bjyblog.seo.use_slug',
                'value'      => 'false',
                'created_at' => '2019-05-19 19:43:00',
                'updated_at' => '2019-05-19 19:43:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 168,
                'name'       => 'bjyblog.social_share.select_plugin',
                'value'      => 'sharejs',
                'created_at' => '2019-05-27 22:22:00',
                'updated_at' => '2019-05-27 22:22:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 169,
                'name'       => 'bjyblog.social_share.jssocials_config',
                'value'      => '{
    shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "pocket", "whatsapp", "messenger", "vkontakte", "telegram", "line"],
    showLabel: false,
    showCount: false,
    shareIn: "popup"
}',
                'created_at' => '2019-05-27 22:22:00',
                'updated_at' => '2019-05-27 22:22:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 170,
                'name'       => 'bjyblog.social_share.sharejs_config',
                'value'      => '{
    sites: ["weibo", "qq", "wechat", "douban", "qzone", "linkedin", "facebook", "twitter", "google"]
}',
                'created_at' => '2019-05-27 22:22:00',
                'updated_at' => '2019-05-27 22:22:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 171,
                'name'       => 'bjyblog.logo_with_php_tag',
                'value'      => 'true',
                'created_at' => '2019-05-28 23:15:00',
                'updated_at' => '2019-05-28 23:15:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 172,
                'name'       => 'bjyblog.cdn_domain',
                'value'      => '',
                'created_at' => '2019-08-05 22:15:00',
                'updated_at' => '2019-08-05 22:15:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 173,
                'name'       => 'bjyblog.comment_audit',
                'value'      => 'false',
                'created_at' => '2019-10-21 22:45:00',
                'updated_at' => '2019-10-21 22:45:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 174,
                'name'       => 'services.baidu.appid',
                'value'      => '',
                'created_at' => '2019-10-21 22:45:00',
                'updated_at' => '2019-10-21 22:45:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 175,
                'name'       => 'services.baidu.appkey',
                'value'      => '',
                'created_at' => '2019-10-21 22:45:00',
                'updated_at' => '2019-10-21 22:45:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 176,
                'name'       => 'services.baidu.secret',
                'value'      => '',
                'created_at' => '2019-10-21 22:45:00',
                'updated_at' => '2019-10-21 22:45:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 177,
                'name'       => 'scout.driver',
                'value'      => 'null',
                'created_at' => '2019-11-19 22:45:00',
                'updated_at' => '2019-11-19 22:45:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 178,
                'name'       => 'scout.elasticsearch.prefix',
                'value'      => 'laravel_',
                'created_at' => '2019-11-19 22:45:00',
                'updated_at' => '2019-11-19 22:45:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 179,
                'name'       => 'scout.elasticsearch.host',
                'value'      => '127.0.0.1',
                'created_at' => '2019-11-19 22:45:00',
                'updated_at' => '2019-11-19 22:45:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 180,
                'name'       => 'scout.elasticsearch.port',
                'value'      => '9200',
                'created_at' => '2019-11-19 22:45:00',
                'updated_at' => '2019-11-19 22:45:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 181,
                'name'       => 'scout.elasticsearch.scheme',
                'value'      => 'http',
                'created_at' => '2019-11-19 22:45:00',
                'updated_at' => '2019-11-19 22:45:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 182,
                'name'       => 'scout.elasticsearch.user',
                'value'      => 'null',
                'created_at' => '2019-11-19 22:45:00',
                'updated_at' => '2019-11-19 22:45:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 183,
                'name'       => 'scout.elasticsearch.pass',
                'value'      => 'null',
                'created_at' => '2019-11-19 22:45:00',
                'updated_at' => '2019-11-19 22:45:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 184,
                'name'       => 'scout.elasticsearch.analyzer',
                'value'      => 'ik_max_word',
                'created_at' => '2019-11-19 22:45:00',
                'updated_at' => '2019-11-19 22:45:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 185,
                'name'       => 'session.domain',
                'value'      => '',
                'created_at' => '2019-12-14 10:49:00',
                'updated_at' => '2019-12-14 10:49:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 186,
                'name'       => 'scout.algolia.id',
                'value'      => '',
                'created_at' => '2019-12-16 22:45:00',
                'updated_at' => '2019-12-16 22:45:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 187,
                'name'       => 'scout.algolia.secret',
                'value'      => '',
                'created_at' => '2019-12-16 10:49:00',
                'updated_at' => '2019-12-16 10:49:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 188,
                'name'       => 'bjyblog.social_links.github',
                'value'      => '',
                'created_at' => '2019-12-22 23:55:00',
                'updated_at' => '2019-12-22 23:55:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 189,
                'name'       => 'bjyblog.social_links.gitee',
                'value'      => '',
                'created_at' => '2019-12-22 23:55:00',
                'updated_at' => '2019-12-22 23:55:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 190,
                'name'       => 'bjyblog.social_links.zhihu',
                'value'      => '',
                'created_at' => '2019-12-22 23:55:00',
                'updated_at' => '2019-12-22 23:55:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 191,
                'name'       => 'bjyblog.social_links.weibo',
                'value'      => '',
                'created_at' => '2019-12-22 23:55:00',
                'updated_at' => '2019-12-22 23:55:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 192,
                'name'       => 'bjyblog.social_links.upyun',
                'value'      => '',
                'created_at' => '2019-12-22 23:55:00',
                'updated_at' => '2019-12-22 23:55:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 193,
                'name'       => 'bjyblog.link_target',
                'value'      => '_blank',
                'created_at' => '2019-12-25 23:06:00',
                'updated_at' => '2019-12-25 23:06:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 194,
                'name'       => 'bjyblog.breadcrumb',
                'value'      => 'true',
                'created_at' => '2020-01-01 01:01:01',
                'updated_at' => '2020-01-01 01:01:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 195,
                'name'       => 'app.timezone',
                'value'      => 'PRC',
                'created_at' => '2020-01-27 01:01:01',
                'updated_at' => '2020-01-27 01:01:01',
                'deleted_at' => null,
            ],
            [
                'id'         => 196,
                'name'       => 'bjyblog.licenses.allow_adaptation',
                'value'      => '-nd',
                'created_at' => '2020-03-31 23:06:00',
                'updated_at' => '2020-03-31 23:06:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 197,
                'name'       => 'bjyblog.licenses.allow_commercial',
                'value'      => '-nc',
                'created_at' => '2020-03-31 23:06:00',
                'updated_at' => '2020-03-31 23:06:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 198,
                'name'       => 'bjyblog.licenses.language',
                'value'      => 'en',
                'created_at' => '2020-03-31 01:06:00',
                'updated_at' => '2020-03-31 01:06:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 199,
                'name'       => 'bjyblog.theme',
                'value'      => 'blueberry',
                'created_at' => '2020-05-12 23:06:00',
                'updated_at' => '2020-05-12 23:06:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 200,
                'name'       => 'filesystems.disks.oss_uploads.access_key',
                'value'      => '',
                'created_at' => '2020-06-26 23:29:52',
                'updated_at' => '2020-06-26 23:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 201,
                'name'       => 'filesystems.disks.oss_uploads.secret_key',
                'value'      => '',
                'created_at' => '2020-06-26 23:29:52',
                'updated_at' => '2020-06-26 23:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 202,
                'name'       => 'filesystems.disks.oss_uploads.bucket',
                'value'      => '',
                'created_at' => '2020-06-26 23:29:52',
                'updated_at' => '2020-06-26 23:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 203,
                'name'       => 'filesystems.disks.oss_uploads.endpoint',
                'value'      => '',
                'created_at' => '2020-06-26 23:29:52',
                'updated_at' => '2020-06-26 23:29:52',
                'deleted_at' => null,
            ],
            [
                'id'         => 204,
                'name'       => 'bjyblog.upload_disks',
                'value'      => '["public"]',
                'created_at' => '2018-12-04 22:29:52',
                'updated_at' => '2018-12-04 22:29:52',
                'deleted_at' => null,
            ],
        ]);
    }
}
