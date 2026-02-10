<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class ResetTokens extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tokens:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Réinitialise les tokens de tous les utilisateurs à 2000';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        User::whereIn('role_id', [2, 3])->update(['tokens' => 2000]);

        $this->info('Tous les tokens ont été réinitialisés à 2000.');
    }
}
