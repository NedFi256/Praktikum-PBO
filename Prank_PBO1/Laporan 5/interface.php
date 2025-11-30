<?php
// interface.php

interface Transaksi {
    public function total($jumlah);
    public function verifikasi($id, $ket);
}

interface Struk {
    public function nota();
}
