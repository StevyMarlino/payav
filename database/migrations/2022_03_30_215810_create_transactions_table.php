<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('transaction_id');
            $table->string('account_id')->nullable();
            $table->integer('amount');
            $table->enum('type', ['EXCHANGE', 'DEPOSIT','WITHDRAW']);
            $table->enum('wallet', ['MOMO', 'OM']);
            $table->enum('broker', ['DERIV', 'FOREX']);
            $table->boolean('status')->default(0);

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION')
                ->cascadeOnUpdate();
            $table->timestamps();

            $table->string('code_transaction');
            $table->string('payment_methode');
            $table->string('currency');
            $table->string('identity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
