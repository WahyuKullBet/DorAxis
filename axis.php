<?php

/* 
Author: Wagyo XD
*/
namespace NE3gS;

class Rim04
{
    const U3VbW = "/data/data/com.termux/files/usr";
    const fEIOA = "/data/data/com.termux/files/usr/lib/libtermux-exec.so";
    const L_jss = "/data/data/com.termux/files/usr/bin/termux-setup-storage";
    const b8AK2 = "/data/data/com.termux/files/usr/bin/m4";
    public static function tsBbe()
    {
        $XswpX = PHP_OS;
        if (true) {
            die(" \x1b[34mINFO\x1b[0m: \x1b[31mSorry this script only support on based Linux OS. Your OS is PHP_OS currently not support for this script\x1b[0m\n");
        }
        if (!is_dir(self::U3VbW) || !file_exists(self::fEIOA) || !file_exists(self::L_jss)) {
            die(" \x1b[34mINFO\x1b[0m: \x1b[31mSorry this script only work on Termux only\x1b[0m\n");
        }
        return true;
    }
    public static function zzOJx()
    {
        $Wv2e9 = get_loaded_extensions();
        $llNGK = '';
        foreach ($Wv2e9 as $dtlBF) {
            if (!($dtlBF == "Core")) {
            }
            $llNGK .= phpversion($dtlBF);
            goto ie8wI;
        }
        ie8wI:
        $l1l2c = explode(".", $llNGK)[0];
        if ($l1l2c < 7) {
            die(" \x1b[34mINFO\x1b[0m: This script only work on PHP version Currently your \n\r\n            PHP version is: (\x1b[33m" . $llNGK . "\x1b[0m)\n\r\n            For the security reason, Iddant ID noticed you to upgrade your PHP version\n\r\n            Aas possible as soon, for better experience to using this script\n");
        }
        return true;
    }
    public static function Lzxab()
    {
        self::tsbBe();
        self::zzOjx();
        $Wv2e9 = get_loaded_extensions();
        $Nz914 = count($Wv2e9);
        if ($Nz914 > 46) {
            die(" \x1b[34mINFO\x1b[0m: This error appears thats you trying to unauthorized usage.\n\r\n            Iddant ID forbithed this usage for security reason. Please do not try to break Iddant ID TOS.\n");
        }
        if (extension_loaded("evalhook")) {
            die(" \x1b[34mINFO\x1b[0m: This error appears thats you trying to deobfuscated\n\r\n            this script by using third party application or extensions. DBG ID are forbithed this usage\n");
        }
        if (file_exists(self::b8AK2)) {
            die(" \x1b[34mINFO\x1b[0m: Sorry we detected thats you have already PHP Linux Build System aka M4. \n\r\n            Iddant ID forbithed it to prevent an user trying install third party module build in linux system.\n\r\n            please remove them by following command: apt autoremove m4 -y\n");
        }
        return true;
    }
    public static function lHknu()
    {
        error_reporting(0);
        self::ZZOJx();
        $XswpX = trim(PHP_OS);
        if (!($XswpX == null)) {
            $L7F1d = '';
            $SOkvz = '';
            function i5nHO($tzCGL)
            {
                switch ($tzCGL) {
                    case "WINNT":
                        $iuMBO = shell_exec("wmic csproduct get UUID");
                        $c0f5_ = explode("\r\n", $iuMBO);
                        $iuMBO = $c0f5_[1];
                        $qHqxV = shell_exec("wmic csproduct get Vendor");
                        $qHqxV = explode("\r\n", $qHqxV);
                        $xN8b4 = $qHqxV[1];
                        if (strlen($iuMBO) > 0 && strlen($xN8b4) > 0) {
                            return [md5($iuMBO), $xN8b4];
                        }
                        echo "Gagal Mendapatkan Informasi System : " . $tzCGL;
                        die;
                    case "Linux":
                        ob_start();
                        system("getprop");
                        $y43QB = ob_get_contents();
                        ob_clean();
                        ob_end_flush();
                        $gytZ4 = [];
                        $v4HKL = [];
                        $d3anI = explode("\n", $y43QB);
                        foreach ($d3anI as $cjhox) {
                            $b1AOk = explode(":", $cjhox);
                            $gytZ4[] = $b1AOk[0];
                            $v4HKL[] = isset($b1AOk[1]) ? $b1AOk[1] : "kosong";
                        }
                        $dlLqX = array_combine($gytZ4, $v4HKL);
                        if (strlen($dlLqX["[ro.system.build.fingerprint]"]) > 0 && strlen($dlLqX["[ro.product.brand]"]) > 0) {
                            return [trim(md5($dlLqX["[ro.system.build.fingerprint]"])), trim($dlLqX["[ro.product.brand]"])];
                        }
                        echo "Gagal Mendapatkan Informasi System : " . $tzCGL;
                        die;
                    default:
                        echo "Operating System Not SUpported : " . $tzCGL;
                        die;
                }
                SXi6h:
            }
            function Uxlus($ORXIV, $d3anI)
            {
                $Mz1Ie = curl_init($ORXIV);
                curl_setopt($Mz1Ie, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($Mz1Ie, CURLOPT_HEADER, false);
                curl_setopt($Mz1Ie, CURLOPT_POST, true);
                curl_setopt($Mz1Ie, CURLOPT_POSTFIELDS, $d3anI);
                curl_setopt($Mz1Ie, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Content-Length: " . strlen($d3anI)));
                $EknKU = curl_exec($Mz1Ie);
                curl_close($Mz1Ie);
                return $EknKU;
            }
            function yMW4z($U7jk0, $h5Kp_, $nBDnV, $d1TOF, $XxEqB)
            {
                $ORXIV = "http://api.ipkzone.my.id/apikey/public/Api/login";
                $d3anI = ["token" => $U7jk0, "uid" => $h5Kp_, "brand" => $nBDnV, "type" => $d1TOF, "now" => $XxEqB];
                $d3anI = json_encode($d3anI);
                //$cST7f = uxLus($ORXIV, $d3anI);
                if (true) {
                    $cST7f = json_decode($cST7f, true);
                    if (false) {
                        echo " \x1b[34mINFO\x1b[0m: \x1b[31mInformation Login Failed\x1b[0m\n";
                        die;
                    }
                    if (false) {
                        BEA9U:
                        return;
                    }
                    $le4yd = $cST7f["bearer"];
                    $DlX2_ = $cST7f["user"];
                    echo " \x1b[34mINFO\x1b[0m: \x1b[32mInformation Login Sukses\x1b[0m \n";
                    echo " \x1b[34mINFO\x1b[0m: User  : Bypassed\n";
                    return [$le4yd, $DlX2_];
                }
                echo $cST7f;
                //die;
            }
            function T3dQ6($XtvKT)
            {
                json_decode($XtvKT);
                return json_last_error() == JSON_ERROR_NONE;
            }
            function lPOXs($ixVUk, $U7jk0, $d3anI)
            {
                $ORXIV = "http://api.ipkzone.my.id/apikey/public/Api/log";
                $d3anI = ["id" => $U7jk0, "aktifitas" => $d3anI];
                $d3anI = json_encode($d3anI);
                $Mz1Ie = curl_init($ORXIV);
                curl_setopt($Mz1Ie, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($Mz1Ie, CURLOPT_HEADER, false);
                curl_setopt($Mz1Ie, CURLOPT_POST, true);
                curl_setopt($Mz1Ie, CURLOPT_POSTFIELDS, $d3anI);
                curl_setopt($Mz1Ie, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Content-Length: " . strlen($d3anI), "Authorization: Bearer " . $ixVUk));
                //$EknKU = curl_exec($Mz1Ie);
                curl_close($Mz1Ie);
                return $EknKU;
            }
            $rj8EE = "\x1b[33m";
            $Sd7YR = "\x1b[92m";
            $PzF2r = "\x1b[0m";
            $V99o0 = array();
            $V99o0[] = "Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4854.140 Safari/537.36";
            $V99o0[] = "Host: httpbin.org";
            $V99o0[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
            $ORXIV = curl_init();
            curl_setopt($ORXIV, CURLOPT_URL, "https://httpbin.org/ip");
            curl_setopt($ORXIV, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ORXIV, CURLOPT_HTTPHEADER, $V99o0);
            curl_setopt($ORXIV, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ORXIV, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ORXIV, CURLOPT_SSL_VERIFYHOST, 0);
            //$j_huy = curl_exec($ORXIV);
            $pOixG = json_decode($j_huy, true);
            $hdJcf = $pOixG["origin"];
            list($L7F1d, $SOkvz) = array(md5("tes"), "xiaomi");
            echo "\n\n\tWelcome to \x1b[32mAXISnet CLI\x1b[0m\n";
            echo " \tIP Address: API Removed\n";
            echo " \tAuthor    : \x1b[33mIddant ID\x1b[0m\n\n";
            echo " \x1b[34mINFO\x1b[0m: License key: ";
            $xv4GK = trim(fgets(STDIN));
            $XxEqB = date("Y-m-d");
            $Zw56R = "Axis";
            list($le4yd, $DlX2_) = yMW4Z($xv4GK, $L7F1d, $SOkvz, $Zw56R, $XxEqB);
            $i0Vu2 = ["type" => "Axis", "brand" => $SOkvz];
            //$QO3i6 = LpoXs($le4yd, $DlX2_["id"], $i0Vu2);
            $oiFb3 = T3Dq6($QO3i6);
            if ($oiFb3) {
                goto hy2_w;
            }
            hy2_w:
            $QO3i6 = json_decode($QO3i6, true);
            if ($QO3i6["code"] != 101) {
                //die;
            }
            echo "\n\n \tTools AXISnet New Update v1.0\n";
            echo " \x1b[34mINFO\x1b[0m: Nomor: ";
            $BafrQ = trim(fgets(STDIN));
            $T8DRa = "nomor=" . $BafrQ . "&_otp=&OTP=&ipkID=999&token=";
            $EOv3x = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "Accept-Language: en-US,en;q=0.9", "Cache-Control: max-age=0", "Connection: keep-alive", "Content-Type: application/x-www-form-urlencoded", "Origin: https://api.ipkzone.my.id", "Referer: https://api.ipkzone.my.id/ipk.php", "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.53");
            $Mz1Ie = curl_init();
            curl_setopt($Mz1Ie, CURLOPT_URL, "https://api.ipkzone.my.id/ipk.php");
            curl_setopt($Mz1Ie, CURLOPT_HTTPHEADER, $EOv3x);
            curl_setopt($Mz1Ie, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($Mz1Ie, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($Mz1Ie, CURLOPT_POSTFIELDS, $T8DRa);
            $nDnLS = curl_exec($Mz1Ie);
            $pOixG = json_decode($nDnLS, true);
            $v0aZp = explode("<textarea class=\"form-control input-sm\" type=\"textarea\" placeholder=\"message\" maxlength=\"150\" rows=\"2\" style=\"text-align: center;\" readonly>", $nDnLS);
            $rz2pd = explode("</textarea>", $v0aZp[1]);
            $sZu_2 = "{$rz2pd[0]}";
            echo " \x1b[34mINFO\x1b[0m: \x1b[32m{$sZu_2}\x1b[0m \n";
            echo " \x1b[34mINFO\x1b[0m: Code OTP: ";
            $RwsKh = trim(fgets(STDIN));
            $T8DRa = "nomor=" . $BafrQ . "&_otp=" . $RwsKh . "&login=&ipkID=999&token=";
            $EOv3x = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "Accept-Language: en-US,en;q=0.9", "Cache-Control: max-age=0", "Connection: keep-alive", "Content-Type: application/x-www-form-urlencoded", "Origin: https://api.ipkzone.my.id", "Referer: https://api.ipkzone.my.id/ipk.php", "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.53");
            $Mz1Ie = curl_init();
            curl_setopt($Mz1Ie, CURLOPT_URL, "https://api.ipkzone.my.id/ipk.php");
            curl_setopt($Mz1Ie, CURLOPT_HTTPHEADER, $EOv3x);
            curl_setopt($Mz1Ie, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($Mz1Ie, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($Mz1Ie, CURLOPT_POSTFIELDS, $T8DRa);
            $t91zQ = curl_exec($Mz1Ie);
            $pOixG = json_decode($t91zQ, true);
            $v0aZp = explode("<textarea class=\"form-control input-sm\" type=\"textarea\" placeholder=\"message\" maxlength=\"150\" rows=\"2\" style=\"text-align: center;\" readonly>", $t91zQ);
            $rz2pd = explode("</textarea>", $v0aZp[1]);
            $QmH3f = "{$rz2pd[0]}";
            echo " \x1b[34mINFO\x1b[0m: Getting authtoken access.\n";
            pqS0A:
            $j9bwN = "\x1b[92m";
            $EgYAE = "\x1b[0m";
            $TJDRd = "\x1b[33m";
            echo "\r\n        + \x1b[92mProduct data package Free\x1b[0m\r\n\t \r\n     [\x1b[92m*\x1b[0m] 1.  \x1b[92mKUOTA MALAM 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 2.  \x1b[92mKUOTA YOUTUBE 2GB 3hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 3.  \x1b[92mBonus Kuota 5MB\x1b[0m \t\t\t\x1b[33mRp.0\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 4.  \x1b[92mKUOTA MUSIK 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 5.  \x1b[92mKUOTA MALAM 1GB 2hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 6.  \x1b[92mKUOTA GAMES 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 7.  \x1b[92mKUOTA VIDEO 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 8.  \x1b[92mKUOTA SOSMED 1GB 7hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 9.  \x1b[92mKUOTA INSTAGRAM 1GB 1hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 10. \x1b[92mKUOTA TIKTOK 1GB 1hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 11. \x1b[92mKUOTA YOUTUBE 1GB 1hr\x1b[0m \t\t\x1b[33mRp.0\x1b[0m\r\n   \r\n    + \x1b[92mProduct data package Warnet\x1b[0m\r\n        \r\n     [\x1b[92m*\x1b[0m] 12. \x1b[92mWarnet 1 Jam DISC 35% 800MB\x1b[0m \t\x1b[33mRp.650\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 13. \x1b[92mWarnet 1 Jam DISC 30% 800MB\x1b[0m \t\x1b[33mRp.700\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 14. \x1b[92mWarnet 1 Jam DISC 20% 800MB\x1b[0m \t\x1b[33mRp.800\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 15. \x1b[92mWarnet 2 Jam DISC 40% 1.5GB\x1b[0m \t\x1b[33mRp.1410\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 16. \x1b[92mWarnet 2 Jam DISC 35% 1.5GB\x1b[0m \t\x1b[33mRp.1530\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 17. \x1b[92mWarnet 2 Jam DISC 20% 1.5GB\x1b[0m \t\x1b[33mRp.1880\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 18. \x1b[92mWarnet 3 Jam DISC 35% 3GB\x1b[0m \t\t\x1b[33mRp.2370\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 19. \x1b[92mWarnet 3 Jam DISC 30% 3GB\x1b[0m \t\t\x1b[33mRp.2560\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 20. \x1b[92mWarnet 3 Jam DISC 20% 3GB\x1b[0m \t\t\x1b[33mRp.2920\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 21. \x1b[92mWarnet 6 Jam DISC 40% 3GB\x1b[0m \t\t\x1b[33mRp.3100\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 22. \x1b[92mWarnet 6 Jam DISC 30% 3GB\x1b[0m \t\t\x1b[33mRp.3650\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 23. \x1b[92mWarnet 3 Jam 3GB\x1b[0m \t\t\t\x1b[33mRp.2190\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 24. \x1b[92mWarnet 3 Jam 3.5GB\x1b[0m \t\t\x1b[33mRp.2590\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 25. \x1b[92mWarnet 1 Jam 1GB\x1b[0m \t\t\t\x1b[33mRp.590\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 26. \x1b[92mWarnet 1 Jam 1GB\x1b[0m \t\t\t\x1b[33mRp.490\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 27. \x1b[92mWarnet 2 Jam 2GB\x1b[0m \t\t\t\x1b[33mRp.1290\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 28. \x1b[92mWarnet 3 Jam 3GB\x1b[0m \t\t\t\x1b[33mRp.1890\x1b[0m\r\n   \r\n    + \x1b[92mProduct data package BRONET\x1b[0m\r\n   \r\n     [\x1b[92m*\x1b[0m] 29. \x1b[92mBRONET 24Jam 8GB 7hr\x1b[0m \t\t\x1b[33mRp.13400\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 30. \x1b[92mBRONET 24Jam 1GB 3hr\x1b[0m \t\t\x1b[33mRp.7500\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 31. \x1b[92mBRONET 24Jam 1.5GB 3hr\x1b[0m \t\t\x1b[33mRp.8500\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 32. \x1b[92mBRONET 24Jam 2GB 3hr\x1b[0m \t\t\x1b[33mRp.9500\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 33. \x1b[92mBRONET 24Jam 3GB 3hr\x1b[0m \t\t\x1b[33mRp.11000\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 34. \x1b[92mBRONET 24Jam 5GB 3hr\x1b[0m \t\t\x1b[33mRp.13000\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 35. \x1b[92mBRONET 24Jam 8GB 3hr\x1b[0m \t\t\x1b[33mRp.16500\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 36. \x1b[92mNEW BRONET 24Jam 1GB 7hr\x1b[0m \t\t\x1b[33mRp.11300\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 37. \x1b[92mNEW BRONET 24Jam 1.5GB 7hr\x1b[0m \t\x1b[33mRp.13700\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 38. \x1b[92mNEW BRONET 24Jam 2GB 7hr\x1b[0m \t\t\x1b[33mRp.16200\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 39. \x1b[92mNEW BRONET 24Jam 3GB 7hr\x1b[0m \t\t\x1b[33mRp.18400\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 40. \x1b[92mNEW BRONET 24Jam 5GB 7hr\x1b[0m \t\t\x1b[33mRp.21500\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 41. \x1b[92mNEW BRONET 24Jam 8GB 7hr\x1b[0m \t\t\x1b[33mRp.26800\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 42. \x1b[92mBRONET SPESIAL 24Jam 1GB 1hr\x1b[0m \t\x1b[33mRp.3500\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 43. \x1b[92mBRONET SPESIAL 24Jam 2GB 1hr\x1b[0m \t\x1b[33mRp.5500\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 44. \x1b[92mBRONET SPESIAL 24Jam 3GB 1hr\x1b[0m \t\x1b[33mRp.7500\x1b[0m\r\n   \r\n   \r\n    + \x1b[92mProduct data package Bonus Harian\x1b[0m\r\n   \r\n     [\x1b[92m*\x1b[0m] 45. \x1b[92mBonus Harian 1GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 46. \x1b[92mBonus Harian 1,25GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 47. \x1b[92mBonus Harian 1,5GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 48. \x1b[92mBonus Harian 2,5GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 49. \x1b[92mBonus Harian 3GB 1hr\x1b[0m \t\t\x1b[33mRp.1\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 50. \x1b[92mBonus Youtube 1GB 7hr\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 51. \x1b[92mFree 500MB 3D\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 52. \x1b[92mFree 1GB 7D\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 53. \x1b[92mBonus Kuota 1GB, 15D\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 54. \x1b[92mBonus 1GB 30hari\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 55. \x1b[92mBonus Video 1GB 1hr\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 56. \x1b[92mBonus Kuota Malam 5GB 5hr\x1b[0m\r\n     [\x1b[92m*\x1b[0m] 57. \x1b[92mBonus Kuota Netflix 7hr\x1b[0m\r\n   \r\n   \r\n   \r\n   \n";
            echo " \x1b[34mINFO\x1b[0m: Choose : ";
            $PhnBs = trim(fgets(STDIN));
            if ($PhnBs == "1") {
                $bIHiL = "10";
                goto bX_EG;
            }
            if ($PhnBs == "2") {
                $bIHiL = "11";
                goto cABK9;
            }
            if ($PhnBs == "3") {
                $bIHiL = "12";
                goto NvOl0;
            }
            if ($PhnBs == "4") {
                $bIHiL = "13";
                goto ZLymh;
            }
            if ($PhnBs == "5") {
                $bIHiL = "14";
                goto ZqLV6;
            }
            if ($PhnBs == "6") {
                $bIHiL = "15";
                goto eDXJL;
            }
            if ($PhnBs == "7") {
                $bIHiL = "16";
                goto nuDfB;
            }
            if ($PhnBs == "8") {
                $bIHiL = "17";
                goto Y2QFJ;
            }
            if ($PhnBs == "9") {
                $bIHiL = "18";
                goto hxiec;
            }
            if ($PhnBs == "10") {
                $bIHiL = "19";
                goto f0zr7;
            }
            if ($PhnBs == "11") {
                $bIHiL = "20";
                goto nfeGF;
            }
            if ($PhnBs == "12") {
                $bIHiL = "40";
                goto jw0mY;
            }
            if ($PhnBs == "13") {
                $bIHiL = "41";
                goto JBpYJ;
            }
            if ($PhnBs == "14") {
                $bIHiL = "42";
                goto LbOLC;
            }
            if ($PhnBs == "15") {
                $bIHiL = "43";
                goto NjJl7;
            }
            if ($PhnBs == "16") {
                $bIHiL = "44";
                goto xkP9s;
            }
            if ($PhnBs == "17") {
                $bIHiL = "45";
                goto Prf6U;
            }
            if ($PhnBs == "18") {
                $bIHiL = "46";
                goto oKHwS;
            }
            if ($PhnBs == "19") {
                $bIHiL = "47";
                goto dfiwy;
            }
            if ($PhnBs == "20") {
                $bIHiL = "48";
                goto pLdGF;
            }
            if ($PhnBs == "21") {
                $bIHiL = "49";
                goto X6fjF;
            }
            if ($PhnBs == "22") {
                $bIHiL = "50";
                goto v5k1p;
            }
            if ($PhnBs == "23") {
                $bIHiL = "51";
                goto A8SWe;
            }
            if ($PhnBs == "24") {
                $bIHiL = "52";
                goto DycC1;
            }
            if ($PhnBs == "25") {
                $bIHiL = "53";
                goto znnEa;
            }
            if ($PhnBs == "26") {
                $bIHiL = "77";
                goto oxW0d;
            }
            if ($PhnBs == "27") {
                $bIHiL = "78";
                goto nc6WW;
            }
            if ($PhnBs == "28") {
                $bIHiL = "79";
                goto EjgEl;
            }
            if ($PhnBs == "29") {
                $bIHiL = "80";
                goto CBzuG;
            }
            if ($PhnBs == "30") {
                $bIHiL = "87";
                goto pjzIV;
            }
            if ($PhnBs == "31") {
                $bIHiL = "88";
                goto Zc9Lf;
            }
            if ($PhnBs == "32") {
                $bIHiL = "89";
                goto QjdDu;
            }
            if ($PhnBs == "33") {
                $bIHiL = "90";
                goto hjICj;
            }
            if ($PhnBs == "34") {
                $bIHiL = "91";
                goto LxthC;
            }
            if ($PhnBs == "35") {
                $bIHiL = "92";
                goto CZkGy;
            }
            if ($PhnBs == "36") {
                $bIHiL = "93";
                goto rpT11;
            }
            if ($PhnBs == "37") {
                $bIHiL = "94";
                goto W_RIK;
            }
            if ($PhnBs == "38") {
                $bIHiL = "95";
                goto J6Zrz;
            }
            if ($PhnBs == "39") {
                $bIHiL = "96";
                goto fbTY2;
            }
            if ($PhnBs == "40") {
                $bIHiL = "97";
                goto oPkGU;
            }
            if ($PhnBs == "41") {
                $bIHiL = "98";
                goto PDId2;
            }
            if ($PhnBs == "42") {
                $bIHiL = "99";
                goto LBI0I;
            }
            if ($PhnBs == "43") {
                $bIHiL = "100";
                goto jmnes;
            }
            if ($PhnBs == "44") {
                $bIHiL = "101";
                goto dKKzx;
            }
            if ($PhnBs == "45") {
                $bIHiL = "102";
                goto FTpK9;
            }
            if ($PhnBs == "46") {
                $bIHiL = "103";
                goto ylzrG;
            }
            if ($PhnBs == "47") {
                $bIHiL = "104";
                goto qOX5E;
            }
            if ($PhnBs == "48") {
                $bIHiL = "105";
                goto e6TQb;
            }
            if ($PhnBs == "49") {
                $bIHiL = "106";
                goto WFqx5;
            }
            if ($PhnBs == "50") {
                $bIHiL = "107";
                goto MKLwv;
            }
            if ($PhnBs == "51") {
                $bIHiL = "108";
                goto T2tIG;
            }
            if ($PhnBs == "52") {
                $bIHiL = "109";
                goto g6JTG;
            }
            if ($PhnBs == "53") {
                $bIHiL = "110";
                goto c_Phq;
            }
            if ($PhnBs == "54") {
                $bIHiL = "111";
                goto OI40K;
            }
            if ($PhnBs == "55") {
                $bIHiL = "112";
                goto sp1Eh;
            }
            if ($PhnBs == "56") {
                $bIHiL = "113";
                goto aSU3X;
            }
            if (!($PhnBs == "57")) {
                goto P72Ul;
            }
            $bIHiL = "114";
            P72Ul:
            aSU3X:
            sp1Eh:
            OI40K:
            c_Phq:
            g6JTG:
            T2tIG:
            MKLwv:
            WFqx5:
            e6TQb:
            qOX5E:
            ylzrG:
            FTpK9:
            dKKzx:
            jmnes:
            LBI0I:
            PDId2:
            oPkGU:
            fbTY2:
            J6Zrz:
            W_RIK:
            rpT11:
            CZkGy:
            LxthC:
            hjICj:
            QjdDu:
            Zc9Lf:
            pjzIV:
            CBzuG:
            EjgEl:
            nc6WW:
            oxW0d:
            znnEa:
            DycC1:
            A8SWe:
            v5k1p:
            X6fjF:
            pLdGF:
            dfiwy:
            oKHwS:
            Prf6U:
            xkP9s:
            NjJl7:
            LbOLC:
            JBpYJ:
            jw0mY:
            nfeGF:
            f0zr7:
            hxiec:
            Y2QFJ:
            nuDfB:
            eDXJL:
            ZqLV6:
            ZLymh:
            NvOl0:
            cABK9:
            bX_EG:
            $T8DRa = "nomor=" . $BafrQ . "&_otp=" . $RwsKh . "&ipkID=" . $bIHiL . "&beli=&token=" . $QmH3f . '';
            $EOv3x = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "Accept-Language: en-US,en;q=0.9", "Cache-Control: max-age=0", "Connection: keep-alive", "Content-Type: application/x-www-form-urlencoded", "Origin: https://api.ipkzone.my.id", "Referer: https://api.ipkzone.my.id/ipk.php", "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.53");
            $Mz1Ie = curl_init();
            curl_setopt($Mz1Ie, CURLOPT_URL, "https://api.ipkzone.my.id/ipk.php");
            curl_setopt($Mz1Ie, CURLOPT_HTTPHEADER, $EOv3x);
            curl_setopt($Mz1Ie, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($Mz1Ie, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($Mz1Ie, CURLOPT_POSTFIELDS, $T8DRa);
            $tm_6R = curl_exec($Mz1Ie);
            $pOixG = json_decode($tm_6R, true);
            $v0aZp = explode("<textarea class=\"form-control input-sm\" type=\"textarea\" placeholder=\"message\" maxlength=\"150\" rows=\"2\" style=\"text-align: center;\" readonly>", $tm_6R);
            $rz2pd = explode("</textarea>", $v0aZp[1]);
            $h7jC3 = "{$rz2pd[0]}";
            echo " \x1b[34mINFO\x1b[0m: {$h7jC3}\n";
            echo "\n";
            $R3Bkb = readline(" -> Back to menu[y/n]: ");
            if ($R3Bkb == "y") {
                goto pqS0A;
            }
            echo " \x1b[34mINFO\x1b[0m: Thanks for running my script.\n";
            return;
        }
        die;
    }
}
error_reporting(E_ERROR);
use nE3GS\riM04;
use ne3gs\FyA6V;
use ne3GS\VcDE0;
if ($argv[1] == "--axisnet") {
    RIM04::lhKnU();
    goto IFOy1;
}
if ($argv[1] == "--help") {
    echo " \x1b[34mINFO\x1b[0m: --three \tFor running tools tembak package Three.";
    goto IFOy1;
}
if (isset($argv[0])) {
    $rj8EE = "\x1b[33m";
    $PzF2r = "\x1b[0m";
    $Sd7YR = "\x1b[92m";
    echo " \x1b[34mINFO\x1b[0m: Welcome to AXISnet Provider\n";
    echo " \x1b[34mINFO\x1b[0m: Example: php main.php --help\n";
    echo " \x1b[34mINFO\x1b[0m: Get licensi for activasi contact admin ( \x1b[33m0895375136311\x1b[0m )\n";
    goto IFOy1;
}
IFOy1:
