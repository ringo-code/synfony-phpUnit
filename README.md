# synfony-phpUnit

・通常の symfony プロジェクトを作成
symfony new symfony-phpUnit --webap

・プロジェクト内で以下を実行
composer require --dev symfony/phpunit-bridge

・ルートの tests ディレクトリの中に test 用の PHP ファイルを作成
例：HelloWorldTest.php

・PHP ファイルにテストする関数を記述

コード例

<?php

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testHelloWorld()
    {
        $this->assertEquals('Hello, World!', $this->helloWorld());
    }

    private function helloWorld()
    {
        return 'Hello, World!';
    }
}


・ターミナルで
./vendor/bin/phpunitを実行

・実行結果
PHPUnit 9.6.22 by Sebastian Bergmann and contributors.

Testing 
............                                                      12 / 12 (100%)

Time: 00:00.011, Memory: 8.00 MB

OK (12 tests, 12 assertions)
↑ 関数の数

・エラーがなければ全てのテストに問題なし
