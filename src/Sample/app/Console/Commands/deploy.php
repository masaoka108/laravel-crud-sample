<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class deploy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deploy:exec';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload to S3.then excute CodeDeploy';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //dd('pass handle');
        echo 'start deploy' . PHP_EOL;


        //******** Zipファイル作成
        // zipファイル名
        // $fileName = 'myfile.zip';
        // $dir = '/src';    // exampleへのパス
        // $command =  "cd ${dir} ;" .         // exampleディレクトリへ移動
        //     "zip -r ${fileName} /Sample/";  // targetディレクトリを圧縮しmyfile.zipを作成
        // exec($command);  // コマンド実行

        $fileName = 'myfile.zip';
        $outputPath = '/src/Sample/';
        $command = "zip -r ${fileName} ${outputPath}";  // targetディレクトリを圧縮しmyfile.zipを作成
        exec($command);  // コマンド実行


        // zipファイルパス
        $zipPath = $outputPath . $fileName;

        echo 'zip path:' . $zipPath . PHP_EOL;
    }

}
