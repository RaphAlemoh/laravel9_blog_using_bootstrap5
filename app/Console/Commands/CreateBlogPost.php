<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class CreateBlogPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:create-post {--number_of_posts=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A command to create post for this blogging application';

    protected $hidden = true;

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
     * @return int
     */
    public function handle()
    {
        $number_of_posts = (int) $this->option('number_of_posts');

        $bar = $this->output->createProgressBar($number_of_posts);

        $bar->start();

        for ($i=1; $i <= $number_of_posts; $i++) {

            Post::create([
                'title' =>  Str::random(10),
                'description' =>  Str::random(30),
                'user_id' => $i
            ]);

            $bar->advance();
        }

        $bar->finish();

        $this->info(' '. $number_of_posts . ' blog posts created successfully with progress bar!!!');
    }
}
