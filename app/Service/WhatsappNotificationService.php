<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\SentMessage;

class WhatsappNotificationService
{
    public static function getConfig()
    {
        return config('wasender');
    }

    public static function getToken()
    {
        return self::getConfig()['token'];
    }

    public static function getEndpoint()
    {
        return self::getConfig()['endpoint'];
    }

    public static function sendMessage($target, $message)
    {
        $endPoint = self::getEndpoint() . '/send';

        $headers = [
            'Authorization' => self::getToken()
        ];

        $options = [
            [
                'name' => 'target',
                'contents' => $target
            ],
            [
                'name' => 'message',
                'contents' => self::formatMessage($message)
            ]
        ];

        $response = Http::withHeaders($headers)
            ->asMultipart()
            ->post($endPoint, $options);

        return $response->body();
    }

    public static function formatMessage($message)
    {
        $message .= PHP_EOL;
        $message .= PHP_EOL;
        $message .= 'Dikirimkan pada tanggal ' . date('Y-m-d H:i:s') . ' oleh Muhamad Rian ';
        return $message;
    }

    public static function notifikasikebocoranGas($user, $nilaiSensor)
    {
        $target = $user->phone_number;
        $name   = $user->name;

        $message = "Peringatan!!" . PHP_EOL;
        $message .= "Halo $name terdeteksi kebocoran gas pada sensor Anda. Nilai Sensor: $nilaiSensor yang berpotensi membahayakan.";

        return self::sendMessage($target, $message);
    }

    public static function notifikasikebocoranGasMassal($nilaiSensor)
    {
        $nilaiMaksimalSensor = 100; // contoh nilai maksimal sensor
        $durasiPesan = 1; // contoh durasi dalam menit
        $jenisSensor = 'mq5';

       // Ambil user dengan role 'user' dan nomor telepon yang tidak kosong
    $users = User::where('role', 'user')
    ->whereNotNull('phone_number')
    ->get();

        // Ambil pesan terakhir yang dikirim
        $lastSent = SentMessage::where('type', $jenisSensor)
            ->orderBy('created_at', 'desc')
            ->first();

        // Jika nilai sensor kurang dari nilai maksimal, tidak kirim pesan
        if ($nilaiSensor < $nilaiMaksimalSensor) {
            return;
        }

        // Jika belum pernah kirim pesan atau sudah lebih dari durasi yang ditentukan
        if (!$lastSent || now()->diffInMinutes($lastSent->created_at) > $durasiPesan) {
            foreach ($users as $user) {
                self::notifikasikebocoranGas($user, $nilaiSensor);
            }

            // Simpan ke database
            SentMessage::create([
                'type' => $jenisSensor,
            ]);
        }
    }
}

// Mengambil token dari config/wasender.php
// Mengirimkan pesan ke nomor WhatsApp
// Notifikasi kebocoran gas
