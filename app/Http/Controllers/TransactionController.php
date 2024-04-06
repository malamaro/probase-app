<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function deposit(Request $request)
    {

        $account = Account::first();

        $account->balance += $request->amount;
        $account->save();

        $account->transactions()->create([
            'amount' => $request->amount,
            'type' => 'DEPOSIT'
        ]);

        return 'Deposit complete!';
    }

    public function withdraw(Request $request)
    {
        $account = Account::first();

        $account->balance -= $request->amount;
        $account->save();

        $account->transactions()->create([
            'amount' => $request->amount,
            'type' => 'WITHDRAW'
        ]);

        return 'Withdraw completed!';
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        $account = Account::first();
        $account->balance -= $transaction->amount;
        $account->balance += $request->amount;
        $account->save();

        $transaction->amount = $request->amount;

        $transaction->save();

        return 'Transaction updated!';
    }

    public function delete($id)
    {
        $id = intval($id);

        if (is_int($id)) {
            $account = Account::first();

            $transaction = $account->transactions()->find($id);

            try {

                $transaction->delete();

                return 'Transaction deleted!';

            } catch (\Throwable $th) {

                return 'Deleting transcation failed!';

            }
        } else {
            return 'Error::Transaction ID is not int!';
        }





    }


}
