<?php

declare(strict_types=1);

namespace Tests\Commands\Upgrade\Databases\V7_0_0\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialiteUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socialite_users')->truncate();
        DB::table('socialite_users')->insert([
            [
                'id'                           => 1,
                'socialite_client_id'          => 1,
                'name'                         => '白俊遥',
                'avatar'                       => '/uploads/article/default.jpg',
                'openid'                       => '1',
                'access_token'                 => '',
                'last_login_ip'                => '127.0.0.1',
                'login_times'                  => 1,
                'email'                        => 'baijunyao@baijunyao.com',
                'is_admin'                     => 0,
                'created_at'                   => '2017-7-24 07:35:12',
                'updated_at'                   => '2017-7-24 07:35:12',
                'deleted_at'                   => null,
            ],
            [
                'id'                           => 2,
                'socialite_client_id'          => 1,
                'name'                         => '已删除',
                'avatar'                       => '/uploads/article/default.jpg',
                'openid'                       => '2',
                'access_token'                 => '',
                'last_login_ip'                => '127.0.0.1',
                'login_times'                  => 1,
                'email'                        => 'deleted@baijunyao.com',
                'is_admin'                     => 0,
                'created_at'                   => '2019-01-04 16:35:12',
                'updated_at'                   => '2019-01-04 16:35:12',
                'deleted_at'                   => '2019-01-04 16:35:12',
            ],
        ]);
    }
}
