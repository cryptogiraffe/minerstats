<?php

// in kH/s
$gfxcards = array(
  'GPU 2x970' => array(
    "blake"       => 2978.05 * 1000, // ccminer_tpruvot_201604_64
    "blake2s"     => 2163.64 * 1000, // ccminer_tpruvot_201604_64
    "decred"      => 3216.00 * 1000, // ccminer_alexis.x64 -i 29
    "ethereum"    =>   11.79 * 1000, // ethminer-0.9.41-genoil-1.0.6 -M 1266489
    "fresh"       =>   18.57 * 1000, // ccminer_sp_201603
    "groestl"     =>   46.62 * 1000, // ccminer_sp_201603
    "keccak"      =>  787.41 * 1000, // ccminer_sp_201603
    "lyra2"       => 3932.42,        // ccminer_sp_201603
    "lyra2v2"     =>   19.25 * 1000, // ccminer_sp_201603
    "neoscrypt"   => 1244.97,        // ccminer_neoscrypt
    "nist5"       =>   55.76 * 1000, // ccminer_neoscrypt
    "quark"       =>   33.80 * 1000, // ccminer_sp_1.5.79
    "qubit"       =>   24.80 * 1000, // ccminer_sp_1.5.79 -i 21
    "scrypt"      => 1718.08,        // ccminer_sp_201603 -l T26x20
    "scrypt-jane" =>    0.893,       // ccminer_tpruvot -l t23x1
    "sha256"      => 1152.33 * 1000, // ccminer_sp_201603
    "sib"         => 3553.34,        // ccminer_tpruvot
    "skein"       =>  581.11 * 1000, // ccminer_sp_201603
    "skein2"      =>  347.44 * 1000, // ccminer_tpruvot
    "vanilla"     => 5190.86,        // ccminer_sp_201603
    "whirlpoolx"  =>  403.40 * 1000, // ccminer_neoscrypt
    "x11"         =>   16.30 * 1000, // ccminer_neoscrypt
    "x13"         =>   12.83 * 1000, // ccminer_neoscrypt
    "x14"         =>   11.92 * 1000, // ccminer_tpruvot // neoscrypt and sp -- crash
    "x15"         =>   11.09 * 1000, // ccminer_neoscrypt
    "x17"         =>    9.78 * 1000, // ccminer_tpruvot // neoscrypt and sp -- crash
    "zr5"         => 6074.52,        // ccminer_tpruvot_201604_64
  ),
  'GPU 2x970 OC' => array( // +155Core +87mV 100%FAN 110%power
    "blake"       => 3311.00 * 1000, // ccminer_tpruvot_1.7.5-git.x64
    "blake2s"     => 2300.00 * 1000, // ccminer_tpruvot_1.7.5-git.x64 -i 26
    "blakecoin"   => 5852.44 * 1000, // ccminer_tpruvot_1.7.5-git.x64
    "c11"         =>   18.02 * 1000, // ccminer_sp_1.5.80
    "decred"      => 3572.00 * 1000, // ccminer_alexis.x64 -i 27
    "fresh"       =>   20.55 * 1000, // ccminer_neoscrypt -i 21
    "groestl"     =>   51.83 * 1000, // ccminer_sp_1.5.79
    "keccak"      => 1028.50 * 1000, // ccminer_neoscrypt -i 25
    "lyra2"       => 4173.50,        // ccminer_sp_1.5.79
    "lyra2v2"     =>   21.40 * 1000, // ccminer_sp_1.5.79 -i 19
    "myr-gr"      =>   97.64 * 1000, // ccminer_sp_1.5.80
    "neoscrypt"   => 1382.24,        // ccminer_neoscrypt
    "nist5"       =>   61.00 * 1000, // ccminer_neoscrypt
    "quark"       =>   37.44 * 1000, // ccminer_sp_1.5.79 -i 23
    "qubit"       =>   27.40 * 1000, // ccminer_sp_1.5.79 -i 21
    "scrypt"      => 1718.08,        // ccminer_sp_1.5.79 -l T26x20
    "scrypt-jane" =>  915.14 / 1000, // ccminer_tpruvot -l t23x1
    "sha256"      => 1350.00 * 1000, // ccminer_sp_1.5.79
    "sib"         => 3885.35,        // ccminer_tpruvot_1.7.5-git.x64
    "skein"       =>  636.00 * 1000, // ccminer_sp_1.5.79
    "skein2"      =>  384.34 * 1000, // ccminer_tpruvot_1.7.5-git.x64 -i 24
    "vanilla"     => 5800.44,        // ccminer_sp_1.5.79
    "whirlpoolx"  =>  440.40 * 1000, // ccminer_neoscrypt
    "x11"         =>   18.00 * 1000, // ccminer_neoscrypt -i 21
    "x13"         =>   14.23 * 1000, // ccminer_neoscrypt
    "x14"         =>   13.69 * 1000, // ccminer_sp_1.5.80 -i 21
    "x15"         =>   12.35 * 1000, // ccminer_neoscrypt
    "x17"         =>   11.33 * 1000, // ccminer_sp_1.5.80
    "zr5"         => 6646.00,        // ccminer_tpruvot_1.7.5-git.x64 -i 26
  ),
  'GPU 980Ti' => array(
    "blake"       => 2427.28 * 1000, // nicehash default
    "blakecoin"   => 4218.85 * 1000, // nicehash default
    "keccak"      =>  661.21 * 1000, // nicehash default
    "lyra2v2"     =>   15.57 * 1000, // nicehash default
    "neoscrypt"   =>  922.00,        // nicehash default
    "nist5"       =>   42.53 * 1000, // nicehash default
    "quark"       =>   27.13 * 1000, // nicehash default
    "qubit"       =>   20.12 * 1000, // nicehash default
    "vanilla"     => 4238.21 * 1000, // nicehash default
    "whirlpoolx"  =>  329.34 * 1000, // nicehash default
    "x11"         =>   13.12 * 1000, // nicehash default
    "x13"         =>   10.21 * 1000, // nicehash default
    "x15"         =>    8.88 * 1000, // nicehash default
    "ethereum"    =>   21.18 * 1000, // ethminer-0.9.41-genoil-1.0.6 -M 1294333
  ),
  'GPU 570' => array(
    "quark"       =>  527.30, // ccminer_oxen
    "x11"         => 1280.00, // ccminer_oxen
    "x13"         => 1091.16, // ccminer_oxen
    "x15"         =>  987.65, // ccminer_oxen
  ),
  'GPU 270X' => array(
    "decred"    =>  650.0 * 1000, // sgminer-5-3-1-decred
    "keccak"    =>  233.1 * 1000,
    "lyra2v2"   =>  414,
    "neoscrypt" =>  240, // sgminer-5-3-0-general
    "nist5"     => 5200,
    "quark"     => 6970, // sgminer-5-1-0-optimized
    "qubit"     => 7740, // sgminer-5-1-1-optimized
    "vanilla"   => 1437.00 * 1000,
    "x11"       => 6850, // sgminer-5-1-0-optimized
    "x13"       => 3000, // sgminer-5-3-0-general
    "x15"       => 1320, // sgminer-5-3-0-general
  ),
  /*
  'GPU 6970' => array(
    "x11"       => 2000,
    "x13" => 1600,
    "keccak" => 209200,
    "x15" => 1400,
    "neoscrypt" => 39,
    "qubit" => 2500,
    "quark" => 2700,
    "lyra2v2" => 1900,
    "blake256r8" => 1443700,
    "blake256r8vnl" => 1432700,
  ),
  */
  /********
   * CPU's
   ********/

  /*
  'CPU i7 4770' => array(
    "argon2"      =>  26.67,
    "axiom"       =>   0.386,
    "blake"       =>  12.63 * 1000,
    "blakecoin"   =>  19.09 * 1000,
    "c11"           =>    600000 / 1000, // cpuminer-opt
    "decred"      =>  13.00 * 1000,
    "ethereum"    => 556.79,
    "keccak"      =>   7.04 * 1000,
    "lyra2"       => 870.36, // cpuminer-opt on virtual debian
    "lyra2v2"     => 434.69,
    "neoscrypt"   =>  16.01,
    "nist5"       => 794.71,
    "quark"       => 500.74,
    "qubit"       => 402.75,
    "scrypt"      =>  93.50,
    "scrypt-jane" =>   0.208,
    "sha256"      =>  50.84 * 1000,
    "vanilla"     =>  19.10 * 1000,
    "x11"         => 251.91,
    "x13"         => 164.99,
    "x14"         => 159.72,
    "x15"         => 152.57,
    "yescrypt"    =>   1.61,
  ),
  */
  'CPU i7 4770 OC' => array( // 103x39 -- 4017MHz vs stock 3900MHz
    "anime"         =>     587053 / 1000, // cpuminer-nicehash
    "argon2"        =>      30838 / 1000, // cpuminer-opt
    "axiom"         =>         80 / 1000, // cpuminer-opt
    "bastion"       =>     159888 / 1000, // cpuminer-opt
    "blake"         =>   20854516 / 1000, // cpuminer-opt
    "blake256r8vnl" =>   33451974 / 1000, // cpuminer-opt
    "blake2s"       =>   16254204 / 1000, // cpuminer-nicehash
    "blakecoin"     =>   30424628 / 1000, // cpuminer-opt
    "bmw"           =>    9390479 / 1000, // cpuminer-nicehash
    "c11"           =>     707497 / 1000, // cpuminer-opt
    "cryptolight"   =>        597 / 1000, // cpuminer-opt
    "cryptonight"   =>        117 / 1000, // cpuminer-opt
    "decred"        =>   21371911 / 1000, // cpuminer-opt
    "dmd-gr"        =>    1109073 / 1000, // cpuminer-opt
    "drop"          =>     948068 / 1000, // cpuminer-opt
    "fresh"         =>     499480 / 1000, // cpuminer-opt
    "groestl"       =>    1125917 / 1000, // cpuminer-nicehash
    "heavy"         =>     229848 / 1000, // cpuminer-nicehash
    "keccak"        =>    8332952 / 1000, // cpuminer-nicehash
    "luffa"         =>    3177996 / 1000, // cpuminer-nicehash
    "lyra2"         =>     921109 / 1000, // cpuminer-nicehash
    "lyra2v2"       =>     413000 / 1000, // cpuminer-opt
    "m7m"           =>      33432 / 1000, // cpuminer-opt
    "myr-gr"        =>    2984756 / 1000, // cpuminer-opt
    "neoscrypt"     =>      28891 / 1000, // cpuminer-nicehash
    "nist5"         =>    1642660 / 1000, // cpuminer-opt
    "pentablake"    =>    3609862 / 1000, // cpuminer-nicehash
    "pluck"         =>       1818 / 1000, // cpuminer-nicehash
    "quark"         =>    1074024 / 1000, // cpuminer-opt
    "qubit"         =>     978906 / 1000, // cpuminer-opt
    "s3"            =>    1201897 / 1000, // cpuminer-nicehash
    "scrypt"        =>      99702 / 1000, // cpuminer-nicehash
    "scryptjane:16" =>        192 / 1000, // cpuminer-opt
    "sha256d"       =>   54669375 / 1000, // cpuminer-nicehash
    "shavite3"      =>    2343704 / 1000, // cpuminer-nicehash
    "sib"           =>     470273 / 1000, // cpuminer-opt
    "skein"         =>    6586806 / 1000, // cpuminer-nicehash
    "skein2"        =>    8167405 / 1000, // cpuminer-nicehash
    "vanilla"       =>   28764303 / 1000, // cpuminer-opt
    "x11"           =>     680450 / 1000, // cpuminer-opt
    "x13"           =>     330987 / 1000, // cpuminer-opt
    "x14"           =>     309014 / 1000, // cpuminer-opt
    "x15"           =>     288348 / 1000, // cpuminer-opt
    "x17"           =>     267620 / 1000, // cpuminer-opt
    "yescrypt"      =>       3398 / 1000, // cpuminer-opt
    "zr5"           =>     796181 / 1000, // cpuminer-opt
  ),
  'CPU i7 2600K' => array(
    "lyra2"       => 485.850, // nicehash default
    "axiom"       =>   0.139, // nicehash default
    "scrypt-jane" =>   0.184, // nicehash default
  ),
  'CPU i7 6700' => array(
    "axiom"       =>   0.399,
    "lyra2"       => 762.590,
    "scrypt-jane" =>   0.299,
  ),
  /*
  'CPU X4 965' => array(
    "axiom"       =>   0.059,
    "lyra2"       => 397.56,
    "scrypt-jane" =>   0.056,
  ),
  */
  'CPU i5 4690k' => array(
    "axiom" => 0.275,
    "lyra2" => 678,
    "scrypt-jane" => 0.131,
  ),
  /*
  'CPU i5 4570S' => array(
    "anime"         =>     432956 / 1000, // cpuminer
    "argon2"        =>      16415 / 1000, // cpuminer-opt
    "axiom"         =>         51 / 1000, // cpuminer-opt
    "bastion"       =>     151905 / 1000, // cpuminer-opt
    "blake"         =>   14724947 / 1000, // cpuminer
    "blake256r8vnl" =>   21745525 / 1000, // cpuminer-opt
    "blake2s"       =>   10152210 / 1000, // cpuminer
    "blakecoin"     =>   21803021 / 1000, // cpuminer-opt
    "bmw"           =>    7487587 / 1000, // cpuminer
    "c11"           =>     451745 / 1000, // cpuminer-opt
    "cryptolight"   =>        329 / 1000, // cpuminer-opt
    "cryptonight"   =>         96 / 1000, // cpuminer-opt
    "decred"        =>   14805459 / 1000, // cpuminer-opt
    "dmd-gr"        =>    1244444 / 1000, // cpuminer-opt
    "drop"          =>    1400000 / 1000, // cpuminer-opt
    "fresh"         =>     343444 / 1000, // cpuminer
    "groestl"       =>    1466666 / 1000, // cpuminer-opt
    "heavy"         =>     136306 / 1000, // cpuminer
    "hodl"          =>         93 / 1000, // cpuminer-opt
    "keccak"        =>    5856757 / 1000, // cpuminer
    "luffa"         =>    4333333 / 1000, // cpuminer-opt
    "lyra2"         =>     594868 / 1000, // cpuminer
    "lyra2v2"       =>     584313 / 1000, // cpuminer-opt
    "myr-gr"        =>    2795742 / 1000, // cpuminer-opt
    "neoscrypt"     =>      14766 / 1000, // cpuminer
    "nist5"         =>    1133144 / 1000, // cpuminer-opt
    "pentablake"    =>    2530458 / 1000, // cpuminer-opt
    "pluck"         =>       1242 / 1000, // cpuminer
    "quark"         =>     634523 / 1000, // cpuminer-opt
    "qubit"         =>     576190 / 1000, // cpuminer-opt
    "s3"            =>     816548 / 1000, // cpuminer
    "scrypt"        =>      60807 / 1000, // cpuminer-opt
    "scryptjane:16" =>        104 / 1000, // cpuminer
    "sha256d"       =>   35535485 / 1000, // cpuminer
    "shavite3"      =>    1608475 / 1000, // cpuminer
    "sib"           =>     558672 / 1000, // cpuminer-opt
    "skein"         =>    4670727 / 1000, // cpuminer
    "skein2"        =>    5812744 / 1000, // cpuminer
    "vanilla"       =>   21663889 / 1000, // cpuminer-opt
    "x11"           =>     453805 / 1000, // cpuminer-opt
    "x13"           =>     185492 / 1000, // cpuminer-opt
    "x14"           =>     215004 / 1000, // cpuminer-opt
    "x15"           =>     158682 / 1000, // cpuminer-opt
    "x17"           =>     165744 / 1000, // cpuminer-opt
    "yescrypt"      =>       2434 / 1000, // cpuminer-opt
    "zr5"           =>     493225 / 1000, // cpuminer-opt
  ),
  */

  /******
   * VPS
   ******/

  /*
  'VPS scaleway $3/mo' => array(
    "anime"         =>   36858 / 1000, // cpuminer-nicehash
    "argon2"        =>    1554 / 1000, // cpuminer-opt
    "axiom"         =>      10 / 1000, // cpuminer-opt
    "bastion"       =>   26224 / 1000, // cpuminer-opt
    "blake"         => 2482639 / 1000, // cpuminer-nicehash
    "blake256r8vnl" => 3425501 / 1000, // cpuminer-opt
    "blake2s"       => 1828271 / 1000, // cpuminer-nicehash
    "blakecoin"     => 3622492 / 1000, // cpuminer-nicehash
    "bmw"           => 1420312 / 1000, // cpuminer-nicehash
    "c11"           =>   68983 / 1000, // cpuminer-opt
    "cryptolight"   =>      48 / 1000, // cpuminer-opt
    "cryptonight"   =>      17 / 1000, // cpuminer-opt
    "decred"        => 2473667 / 1000, // cpuminer-opt
    "dmd-gr"        =>  161384 / 1000, // cpuminer-nicehash
    "drop"          =>   74754 / 1000, // cpuminer-opt
    "fresh"         =>   40995 / 1000, // cpuminer-nicehash
    "groestl"       =>  208556 / 1000, // cpuminer-opt
    "hodl"          =>      25 / 1000, // cpuminer-opt
    "keccak"        => 1123433 / 1000, // cpuminer-nicehash
    "luffa"         =>  472222 / 1000, // cpuminer-opt
    "lyra2"         =>   90593 / 1000, // cpuminer-nicehash
    "lyra2v2"       =>   55569 / 1000, // cpuminer-opt
    "myr-gr"        =>  348484 / 1000, // cpuminer-opt
    "neoscrypt"     =>    4208 / 1000, // cpuminer-nicehash
    "nist5"         =>  150233 / 1000, // cpuminer-opt
    "pentablake"    =>  453293 / 1000, // cpuminer-nicehash
    "pluck"         =>     178 / 1000, // cpuminer-nicehash
    "quark"         =>   90908 / 1000, // cpuminer-opt
    "qubit"         =>   71650 / 1000, // cpuminer-opt
    "s3"            =>   89453 / 1000, // cpuminer-nicehash
    "scrypt"        =>    6606 / 1000, // cpuminer-nicehash
    "scryptjane:16" =>      28 / 1000, // cpuminer-nicehash
    "sha256d"       => 3963772 / 1000, // cpuminer-nicehash
    "shavite3"      =>  350843 / 1000, // cpuminer-nicehash
    "sib"           =>   54505 / 1000, // cpuminer-opt
    "skein"         =>  782438 / 1000, // cpuminer-nicehash
    "skein2"        =>  912120 / 1000, // cpuminer-nicehash
    "vanilla"       => 3536958 / 1000, // cpuminer-opt
    "x11"           =>   48104 / 1000, // cpuminer-opt
    "x13"           =>   20694 / 1000, // cpuminer-opt
    "x14"           =>   24197 / 1000, // cpuminer-opt
    "x15"           =>   18847 / 1000, // cpuminer-opt
    "x17"           =>   12981 / 1000, // cpuminer-opt
    "yescrypt"      =>     301 / 1000, // cpuminer-opt
    "zr5"           =>   69081 / 1000, // cpuminer-opt
  ),
  'VPS digitalocean $5/mo' => array(
    "anime"         =>   78185 / 1000, // cpuminer-nicehash
    "argon2"        =>    2847 / 1000, // cpuminer-opt
    "axiom"         =>       9 / 1000, // cpuminer-opt
    "bastion"       =>   24096 / 1000, // cpuminer-opt
    "blake"         => 2684402 / 1000, // cpuminer-nicehash
    "blake256r8vnl" => 3898254 / 1000, // cpuminer-opt
    "blake2s"       => 1817314 / 1000, // cpuminer-nicehash
    "blakecoin"     => 3958683 / 1000, // cpuminer-opt
    "bmw"           => 1148620 / 1000, // cpuminer-nicehash
    "c11"           =>  133333 / 1000, // cpuminer-opt
    "cryptolight"   =>      51 / 1000, // cpuminer-opt
    "cryptonight"   =>      29 / 1000, // cpuminer-opt
    "decred"        => 2482863 / 1000, // cpuminer-opt
    "dmd-gr"        =>  250000 / 1000, // cpuminer-opt
    "drop"          =>  117647 / 1000, // cpuminer-opt
    "fresh"         =>   64683 / 1000, // cpuminer-nicehash
    "groestl"       =>  141483 / 1000, // cpuminer-nicehash
    "heavy"         =>   22001 / 1000, // cpuminer-nicehash
    "keccak"        =>  969605 / 1000, // cpuminer-nicehash
    "luffa"         =>  666666 / 1000, // cpuminer-opt
    "lyra2"         =>  110630 / 1000, // cpuminer-nicehash
    "lyra2v2"       =>  111111 / 1000, // cpuminer-opt
    "myr-gr"        =>  666666 / 1000, // cpuminer-opt
    "neoscrypt"     =>    2374 / 1000, // cpuminer-nicehash
    "nist5"         =>  122283 / 1000, // cpuminer-nicehash
    "pentablake"    =>  456932 / 1000, // cpuminer-opt
    "pluck"         =>     217 / 1000, // cpuminer-nicehash
    "quark"         =>  125000 / 1000, // cpuminer-opt
    "qubit"         =>   53300 / 1000, // cpuminer-nicehash
    "s3"            =>  149726 / 1000, // cpuminer-nicehash
    "scrypt"        =>   10813 / 1000, // cpuminer-nicehash
    "scryptjane:16" =>      18 / 1000, // cpuminer-nicehash
    "sha256d"       => 6791779 / 1000, // cpuminer-nicehash
    "shavite3"      =>  302408 / 1000, // cpuminer-nicehash
    "sib"           =>   62500 / 1000, // cpuminer-opt
    "skein"         =>  847720 / 1000, // cpuminer-opt
    "skein2"        => 1037848 / 1000, // cpuminer-nicehash
    "vanilla"       => 3881084 / 1000, // cpuminer-opt
    "x11"           =>   83177 / 1000, // cpuminer-opt
    "x13"           =>   24390 / 1000, // cpuminer-opt
    "x14"           =>   35577 / 1000, // cpuminer-opt
    "x15"           =>   19544 / 1000, // cpuminer-nicehash
    "x17"           =>   27027 / 1000, // cpuminer-opt
    "yescrypt"      =>     407 / 1000, // cpuminer-opt
    "zr5"           =>   88947 / 1000, // cpuminer-opt
  ),
  'VPS hetzner $5/mo' => array(
    "anime"         =>      55037 / 1000, // cpuminer
    "argon2"        =>       2446 / 1000, // cpuminer-opt
    "axiom"         =>          9 / 1000, // cpuminer-opt
    "bastion"       =>      29411 / 1000, // cpuminer-opt
    "blake"         =>    2533538 / 1000, // cpuminer-opt
    "blake256r8vnl" =>    3749199 / 1000, // cpuminer-opt
    "blake2s"       =>    1774312 / 1000, // cpuminer
    "blakecoin"     =>    3785718 / 1000, // cpuminer-opt
    "bmw"           =>    1409118 / 1000, // cpuminer
    "c11"           =>      58823 / 1000, // cpuminer-opt
    "cryptolight"   =>         57 / 1000, // cpuminer-opt
    "cryptonight"   =>         35 / 1000, // cpuminer-opt
    "decred"        =>    2421765 / 1000, // cpuminer-opt
    "dmd-gr"        =>     250000 / 1000, // cpuminer-opt
    "drop"          =>     142857 / 1000, // cpuminer-opt
    "fresh"         =>      53295 / 1000, // cpuminer
    "groestl"       =>     250000 / 1000, // cpuminer-opt
    "heavy"         =>      22880 / 1000, // cpuminer
    "keccak"        =>    1063794 / 1000, // cpuminer
    "luffa"         =>     500000 / 1000, // cpuminer-opt
    "lyra2"         =>      93157 / 1000, // cpuminer
    "lyra2v2"       =>      48780 / 1000, // cpuminer-opt
    "myr-gr"        =>     500000 / 1000, // cpuminer-opt
    "neoscrypt"     =>       2672 / 1000, // cpuminer-opt
    "nist5"         =>     200000 / 1000, // cpuminer-opt
    "pentablake"    =>     441382 / 1000, // cpuminer
    "pluck"         =>        197 / 1000, // cpuminer-opt
    "quark"         =>     111111 / 1000, // cpuminer-opt
    "qubit"         =>      44101 / 1000, // cpuminer
    "s3"            =>     124007 / 1000, // cpuminer
    "scrypt"        =>       7258 / 1000, // cpuminer-opt
    "scryptjane:16" =>         21 / 1000, // cpuminer
    "sha256d"       =>    3643108 / 1000, // cpuminer
    "shavite3"      =>     314549 / 1000, // cpuminer
    "sib"           =>      86956 / 1000, // cpuminer-opt
    "skein"         =>     801021 / 1000, // cpuminer
    "skein2"        =>     952308 / 1000, // cpuminer-opt
    "vanilla"       =>    3831954 / 1000, // cpuminer-opt
    "x11"           =>      71015 / 1000, // cpuminer-opt
    "x13"           =>      33333 / 1000, // cpuminer-opt
    "x14"           =>      34750 / 1000, // cpuminer-opt
    "x15"           =>      20408 / 1000, // cpuminer-opt
    "x17"           =>      19607 / 1000, // cpuminer-opt
    "yescrypt"      =>        481 / 1000, // cpuminer-opt
    "zr5"           =>      94906 / 1000, // cpuminer-opt
  ),
  */
  'VPS vultr $5/mo' => array(
    "anime"         =>   92164 / 1000, // cpuminer
    "argon2"        =>    3413 / 1000, // cpuminer-opt
    "axiom"         =>      10 / 1000, // cpuminer-opt
    "bastion"       =>   29850 / 1000, // cpuminer-opt
    "blake"         => 3214558 / 1000, // cpuminer
    "blake256r8vnl" => 4246587 / 1000, // cpuminer-opt
    "blake2s"       => 2197848 / 1000, // cpuminer
    "blakecoin"     => 4674923 / 1000, // cpuminer-opt
    "bmw"           => 1638154 / 1000, // cpuminer
    "c11"           =>   83333 / 1000, // cpuminer-opt
    "cryptolight"   =>      62 / 1000, // cpuminer-opt
    "cryptonight"   =>      37 / 1000, // cpuminer-opt
    "decred"        => 3140078 / 1000, // cpuminer-opt
    "dmd-gr"        =>  333333 / 1000, // cpuminer-opt
    "drop"          =>  142857 / 1000, // cpuminer-opt
    "fresh"         =>   74779 / 1000, // cpuminer
    "groestl"       =>  171317 / 1000, // cpuminer
    "heavy"         =>   27594 / 1000, // cpuminer
    "keccak"        => 1264995 / 1000, // cpuminer
    "luffa"         => 1000000 / 1000, // cpuminer-opt
    "lyra2"         =>  127302 / 1000, // cpuminer
    "lyra2v2"       =>   80000 / 1000, // cpuminer-opt
    "myr-gr"        => 1000000 / 1000, // cpuminer-opt
    "neoscrypt"     =>    2906 / 1000, // cpuminer-opt
    "nist5"         =>  333333 / 1000, // cpuminer-opt
    "pentablake"    =>  546505 / 1000, // cpuminer-opt
    "pluck"         =>     258 / 1000, // cpuminer-opt
    "quark"         =>  166666 / 1000, // cpuminer-opt
    "qubit"         =>  142857 / 1000, // cpuminer-opt
    "s3"            =>  179324 / 1000, // cpuminer
    "scrypt"        =>   13992 / 1000, // cpuminer-opt
    "scryptjane:16" =>      23 / 1000, // cpuminer-opt
    "sha256d"       => 8152796 / 1000, // cpuminer
    "shavite3"      =>  345464 / 1000, // cpuminer
    "sib"           =>  117647 / 1000, // cpuminer-opt
    "skein"         => 1012747 / 1000, // cpuminer-opt
    "skein2"        => 1212549 / 1000, // cpuminer-opt
    "vanilla"       => 4765128 / 1000, // cpuminer-opt
    "x11"           =>   98091 / 1000, // cpuminer-opt
    "x13"           =>   40000 / 1000, // cpuminer-opt
    "x14"           =>   48550 / 1000, // cpuminer-opt
    "x15"           =>   26315 / 1000, // cpuminer-opt
    "x17"           =>   34482 / 1000, // cpuminer-opt
    "yescrypt"      =>     606 / 1000, // cpuminer-opt
    "zr5"           =>  113644 / 1000, // cpuminer-opt
  ),
  /*
  'VPS ramnode $7/mo' => array(
    "anime"         =>   153384 / 1000, // cpuminer-nicehash
    "argon2"        =>     6390 / 1000, // cpuminer-opt
    "axiom"         =>       25 / 1000, // cpuminer-opt
    "bastion"       =>    53898 / 1000, // cpuminer-opt
    "blake"         =>  6491635 / 1000, // cpuminer-nicehash
    "blake256r8vnl" => 10559016 / 1000, // cpuminer-opt
    "blake2s"       =>  4817597 / 1000, // cpuminer-opt
    "blakecoin"     => 10265849 / 1000, // cpuminer-opt
    "bmw"           =>  3464976 / 1000, // cpuminer-nicehash
    "c11"           =>   169444 / 1000, // cpuminer-opt
    "cryptolight"   =>      119 / 1000, // cpuminer-opt
    "cryptonight"   =>       87 / 1000, // cpuminer-opt
    "decred"        =>  6164716 / 1000, // cpuminer-opt
    "dmd-gr"        =>   532796 / 1000, // cpuminer-opt
    "drop"          =>   212196 / 1000, // cpuminer-opt
    "fresh"         =>   140783 / 1000, // cpuminer-nicehash
    "groestl"       =>   532546 / 1000, // cpuminer-opt
    "heavy"         =>    60175 / 1000, // cpuminer-nicehash
    "keccak"        =>  2923263 / 1000, // cpuminer-nicehash
    "luffa"         =>  1010604 / 1000, // cpuminer-opt
    "lyra2"         =>   256002 / 1000, // cpuminer-nicehash
    "lyra2v2"       =>   147869 / 1000, // cpuminer-opt
    "myr-gr"        =>   547022 / 1000, // cpuminer-nicehash
    "neoscrypt"     =>     7366 / 1000, // cpuminer-nicehash
    "nist5"         =>   231812 / 1000, // cpuminer-nicehash
    "pentablake"    =>  1111874 / 1000, // cpuminer-opt
    "pluck"         =>      505 / 1000, // cpuminer-nicehash
    "quark"         =>   339877 / 1000, // cpuminer-opt
    "qubit"         =>   174242 / 1000, // cpuminer-opt
    "s3"            =>   337709 / 1000, // cpuminer-opt
    "scrypt"        =>    19445 / 1000, // cpuminer-nicehash
    "scryptjane:16" =>       54 / 1000, // cpuminer-opt
    "sha256d"       => 10114165 / 1000, // cpuminer-nicehash
    "shavite3"      =>   842228 / 1000, // cpuminer-nicehash
    "skein"         =>  2132173 / 1000, // cpuminer-nicehash
    "skein2"        =>  2610211 / 1000, // cpuminer-nicehash
    "x11"           =>   186654 / 1000, // cpuminer-opt
    "x11gost"       =>   173913 / 1000, // cpuminer-opt
    "x13"           =>    98937 / 1000, // cpuminer-opt
    "x14"           =>    93675 / 1000, // cpuminer-opt
    "x15"           =>    49579 / 1000, // cpuminer-nicehash
    "x17"           =>    43156 / 1000, // cpuminer-opt
    "yescrypt"      =>     1252 / 1000, // cpuminer-opt
    "zr5"           =>   251226 / 1000, // cpuminer-opt
  ),
  'VPS linode $10/mo' => array(
    "anime"         =>   94537 / 1000, // cpuminer-nicehash
    "argon2"        =>    3405 / 1000, // cpuminer-opt
    "axiom"         =>      11 / 1000, // cpuminer-opt
    "bastion"       =>   35087 / 1000, // cpuminer-opt
    "blake"         => 3192984 / 1000, // cpuminer-nicehash
    "blake256r8vnl" => 4716686 / 1000, // cpuminer-opt
    "blake2s"       => 2189359 / 1000, // cpuminer-nicehash
    "blakecoin"     => 4664608 / 1000, // cpuminer-opt
    "bmw"           => 1631202 / 1000, // cpuminer-nicehash
    "c11"           =>  133333 / 1000, // cpuminer-opt
    "cryptolight"   =>      56 / 1000, // cpuminer-opt
    "cryptonight"   =>      32 / 1000, // cpuminer-opt
    "decred"        => 3227778 / 1000, // cpuminer-opt
    "dmd-gr"        =>  285714 / 1000, // cpuminer-opt
    "drop"          =>  285714 / 1000, // cpuminer-opt
    "fresh"         =>   77550 / 1000, // cpuminer-nicehash
    "groestl"       =>  173546 / 1000, // cpuminer-opt
    "heavy"         =>   28473 / 1000, // cpuminer-nicehash
    "hodl"          =>       3 / 1000, // cpuminer-opt
    "keccak"        => 1309418 / 1000, // cpuminer-nicehash
    "luffa"         =>  666666 / 1000, // cpuminer-opt
    "lyra2"         =>  135088 / 1000, // cpuminer-nicehash
    "lyra2v2"       =>   77146 / 1000, // cpuminer-opt
    "myr-gr"        =>  666666 / 1000, // cpuminer-opt
    "neoscrypt"     =>    2904 / 1000, // cpuminer-opt
    "nist5"         =>  250000 / 1000, // cpuminer-opt
    "pentablake"    =>  548219 / 1000, // cpuminer-opt
    "pluck"         =>     262 / 1000, // cpuminer-nicehash
    "quark"         =>  142857 / 1000, // cpuminer-opt
    "qubit"         =>  111111 / 1000, // cpuminer-opt
    "s3"            =>  183866 / 1000, // cpuminer-nicehash
    "scrypt"        =>   13594 / 1000, // cpuminer-nicehash
    "scryptjane:16" =>      28 / 1000, // cpuminer-opt
    "sha256d"       => 8220482 / 1000, // cpuminer-nicehash
    "shavite3"      =>  369248 / 1000, // cpuminer-nicehash
    "sib"           =>  111111 / 1000, // cpuminer-opt
    "skein"         => 1025967 / 1000, // cpuminer-nicehash
    "skein2"        => 1257095 / 1000, // cpuminer-nicehash
    "vanilla"       => 4693043 / 1000, // cpuminer-opt
    "x11"           =>   99708 / 1000, // cpuminer-opt
    "x13"           =>   27777 / 1000, // cpuminer-opt
    "x14"           =>   43854 / 1000, // cpuminer-opt
    "x15"           =>   25000 / 1000, // cpuminer-opt
    "x17"           =>   32258 / 1000, // cpuminer-opt
    "yescrypt"      =>     597 / 1000, // cpuminer-opt
    "zr5"           =>  113239 / 1000, // cpuminer-opt
  ),
  */
);

$memcache = new Memcached;
$memcache->addServer('localhost', 11211);

function fix_hashname($algo) {
    if (!is_string($algo)) return;
    $algo = strtolower($algo);
    if ($algo == "lyra2re")        $algo = "lyra2";
    if ($algo == "lyra2re2")       $algo = "lyra2v2";
    if ($algo == "lyra2rev2")      $algo = "lyra2v2";
    if ($algo == "scryptjanenf16") $algo = "scrypt-jane";
    if ($algo == "scrypt-jane:16") $algo = "scrypt-jane";
    if ($algo == "scryptjane:16")  $algo = "scrypt-jane";
    if ($algo == "blake256r8")     $algo = "blakecoin";
    if ($algo == "blake256r14")    $algo = "blake";
    if ($algo == "blake256r8vnl")  $algo = "vanilla";
    if ($algo == "blake-vanilla")  $algo = "vanilla";
    if ($algo == "ethash")         $algo = "ethereum";
    if ($algo == "sha256d")        $algo = "sha256";
    if ($algo == "x11gost")        $algo = "sib";
    return $algo;
}

function get_hashrate($card, $algo) {
    global $gfxcards;
    $algo = fix_hashname($algo);
    if (!isset($gfxcards[$card])) return;
    if (!isset($gfxcards[$card][$algo])) return;
    return $gfxcards[$card][$algo];
}

function url_cached($url, $id) {
    global $memcache;
    $data = $memcache->get($id);
    if ($data) return $data;

    $data = file_get_contents($url);
    if ($data) $memcache->set($id, $data, 60);
    else trigger_error("Couldn't get $url", E_USER_WARNING);
    return $data;
}

function url_to_array_cached($url, $id) {
    $json = url_cached($url, $id);
    $data = json_decode($json, TRUE);
    if (!$data) trigger_error("Couldn't decode json from $url", E_USER_WARNING);
    return $data;
}

$zpool_data     = url_to_array_cached("http://www.zpool.ca/api/status", "zpool_data");
$hashpower_data = url_to_array_cached("http://hashpower.co/api/status", "hashpower_data");
$yiimp_data     = url_to_array_cached("http://yiimp.ccminer.org/api/status", "yiimp_data");
$nicehash_data  = url_to_array_cached("https://www.nicehash.com/api?method=simplemultialgo.info", "nicehash_data")['result']['simplemultialgo'];
$usd_data       = url_to_array_cached("https://www.bitstamp.net/api/ticker/", "usd_data");
//$dashminer_data = url_to_array_cached("http://dashminer.com/payouts.json", "dashminer_data");
//$wepaybtc_data  = url_to_array_cached("http://wepaybtc.com/payouts.json", "wepaybtc_data");
$mph_data =       url_to_array_cached("https://miningpoolhub.com/index.php?page=api&action=getautoswitchingandprofitsstatistics", "mph_data")['return'];

//$themultipool_x11_data    = url_cached("http://themultipool.com/static/x11_profit.txt",    "themultipool_x11_data");
//$themultipool_scrypt_data = url_cached("http://themultipool.com/static/scrypt_profit.txt", "themultipool_scrypt_data");
//$themultipool_sha256_data = url_cached("http://themultipool.com/static/sha256_profit.txt", "themultipool_sha256_data");

$yiimp_data = str_replace(": ,", ": 0,", $yiimp_data);

$profit = array();
foreach ($gfxcards as $card => $rates) {
    $profit[$card] = array();
    foreach ($rates as $algo => $hashrate) {
        $algo = fix_hashname($algo);
        $gfxcards[$card][$algo] = $hashrate;
    }
}

function deduct_fee(&$value, $fee) {
    if (!isset($fee)) return;
    $fees = ($value / 100) * $fee;
    $value -= $fees;
}

function handle_pool($pool_name, $extra_fee, $algo_name, $payrate_current_name, $payrate_current_multiplier, $payrate_last24h_name, $payrate_last24h_multiplier) {
    global ${"$pool_name" . "_data"};
    foreach (${"$pool_name" . "_data"} as $algo => $entry) {
        $payrate_last24h = 0;
        if (!is_string($algo)) $algo = $entry[$algo_name];
        if (is_numeric($entry)) {
            $payrate_current = $entry;
        } else {
            $payrate_current = $entry[$payrate_current_name];
            if (isset($entry[$payrate_last24h_name])) $payrate_last24h = $entry[$payrate_last24h_name];
        }
        $fee = $extra_fee;
        if (isset($entry['fees'])) $fee += $entry['fees'];
        // if (isset($entry['workers']) && $entry['workers'] <= 0) continue;
        handle_algo($pool_name, $algo, $payrate_current, $fee, $payrate_current_multiplier, $payrate_last24h, $payrate_last24h_multiplier);
    }
}

function handle_algo($pool_name, $algo, $payrate_current, $fee, $payrate_current_multiplier, $payrate_last24h, $payrate_last24h_multiplier) {
    global $profit;
    global $gfxcards;
    $algo = fix_hashname($algo);
    $mbtcmhday_current = $payrate_current * $payrate_current_multiplier; // to get mBTC/MH/Day
    $mbtcmhday_last24h = $payrate_last24h * $payrate_last24h_multiplier;
    if ($pool_name == "nicehash" && $algo == "sha256") $mbtcmhday_current *= 1000; // special case for nicehash sha256
    if ($pool_name == "nicehash" && $algo == "sha256") $mbtcmhday_last24h *= 1000; // special case for nicehash sha256
    if ($pool_name == "zpool") {
        switch ($algo) {
        case 'blakecoin':
        case 'decred':
        case 'blake2s':
            $mbtcmhday_current /= 1000;
            $mbtcmhday_last24h /= 1000;
            break;
        }
    }
    if ($pool_name == "yiimp") {
        switch ($algo) {
            case 'decred':
            case 'blakecoin';
            case 'blake';
            case 'blake2s':
            case 'skein':
                $mbtcmhday_current /= 1000;
                $mbtcmhday_last24h /= 1000;
                break;
        }
    }
    foreach ($gfxcards as $card => $rates) {
        $khs = get_hashrate($card, $algo);
        if (!isset($khs)) continue;
        $mhs = $khs / 1000;
        $mbtcday_current = $mhs * $mbtcmhday_current;
        $mbtcday_last24h = $mhs * $mbtcmhday_last24h;
        deduct_fee($mbtcday_current, $fee);
        deduct_fee($mbtcday_last24h, $fee);
        $profit[$card]["$algo.$pool_name"] = array(
            'algo'                => $algo,
            'pool'                => $pool_name,
            'mBTC/Day current'    => $mbtcday_current,
            'mBTC/MH/Day current' => $mbtcmhday_current,
            'mBTC/Day last24h'    => $mbtcday_last24h,
            'mBTC/MH/Day last24h' => $mbtcmhday_last24h,
        );
    }
}

handle_pool("zpool",     0, '', 'estimate_current', 1000, 'actual_last24h', 1);
handle_pool("hashpower", 2, '', 'estimate_current', 1000, 'actual_last24h', 1000);
handle_pool("yiimp",     0, '', 'estimate_current', 1000, 'estimate_last24h', 1000);
handle_pool("nicehash",  3, 'name', 'paying', 1,    NULL, 1);
//handle_pool("wepaybtc",  0, 'name', 'paying', 1000, NULL, 1);
handle_pool("mph",     0.3, 'algo', 'profit', 1,    NULL, 1);

//handle_algo("dashminer",    "x11",    $dashminer_data['btcpermhs'],        0, 1000, NULL, 1);
//handle_algo("themultipool", "x11",    floatval($themultipool_x11_data),    1, 1000, NULL, 1);
//handle_algo("themultipool", "sha256", floatval($themultipool_sha256_data), 1, 1, NULL, 1);
//handle_algo("themultipool", "scrypt", floatval($themultipool_scrypt_data), 1, 1000, NULL, 1);

function profitrate_cmp($a, $b) {
    $left = $a["mBTC/Day current"];
    $right = $b["mBTC/Day current"];
    if ($left == $right) return 0;
    return ($left > $right) ? -1 : 1;
}

function card_to_anchor($card) {
    $card = str_replace(' ', '_', $card);
    $card = str_replace('.', '', $card);
    $card = str_replace('$', '', $card);
    $card = str_replace('/', '', $card);
    return htmlentities(strtolower($card));
}

