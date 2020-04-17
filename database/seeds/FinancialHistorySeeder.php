<?php

use App\FinancialHistory;
use App\User;
use Illuminate\Database\Seeder;

class FinancialHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $months = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December',
        ];

        $user = User::first();

        foreach ($months as $month) {
            FinancialHistory::create([
                'user_id' => $user->id,
                'month' => $month,
                'income' => rand(30000, 50000),
                'expenses' => rand(10000, 30000),
            ]);
        }
    }
}
