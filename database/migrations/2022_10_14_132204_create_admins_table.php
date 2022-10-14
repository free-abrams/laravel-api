<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nickname')->nullable()->comment('昵称');
            $table->string('username')->comment('用户名');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('password');
            $table->smallInteger('status')->default(1)->comment('1 正常 2禁用');
            $table->timestamps();
            $table->softDeletes();
        });
        $add = [
            'nickname' => '管理员',
            'username' => 'admin',
            'avatar' => 'https://q1.qlogo.cn/g?b=qq&nk=190848757&s=640',
            'password' => \Illuminate\Support\Facades\Crypt::encrypt('admin123456'),
            'status' => 1,
        ];
        \App\Models\Admin::query()->create($add);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
