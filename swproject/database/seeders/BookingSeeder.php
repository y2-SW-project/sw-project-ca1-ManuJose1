<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creates a booking
        $booking = new Booking();
        $booking->date = '2022-06-04';
        $booking->num_players = '4';
        $booking->num_holes = '18';
        $booking->member_name = 'James May';
        $booking->save();

        $booking = new Booking();
        $booking->date = '2022-06-07';
        $booking->num_players = '3';
        $booking->num_holes = '18';
        $booking->member_name = 'Richard Hammond';
        $booking->save();

        $booking = new Booking();
        $booking->date = '2022-06-10';
        $booking->num_players = '5';
        $booking->num_holes = '18';
        $booking->member_name = 'James May';
        $booking->save();

        $booking = new Booking();
        $booking->date = '2022-06-11';
        $booking->num_players = '4';
        $booking->num_holes = '9';
        $booking->member_name = 'Jeremy Clarkson';
        $booking->save();
    }
}
