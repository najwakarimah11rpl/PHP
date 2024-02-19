<h1>ZODIAK PHP</h1>
<from action=" " method="get">
<input type="number" name="tgl" placeholder="tanggal">
<input type="number" name="bln" placeholder="bulan">
 </from>

<?php
$tgl=$_GET["tgl"];
$bln=$_GET["bln"];
$tom="kosong";

if($bln=1){
    if ($tgl>0&&$tgl<20){
        echo "aquarius";
    } if($tgl>19&&$tgl<30){
        echo "scorpio";
    }
}  if($bln=2){
    if ($tgl>0&&$tgl<20){
        echo "virgo";
    } if($tgl>19&&$tgl<30){
        echo "scorpio";
    }
} if($bln=3){
    if ($tgl>0&&$tgl<20){
        echo "aries";
    } if($tgl>19&&$tgl<30){
        echo "virgo";
    }
} if($bln=4){
    if ($tgl>0&&$tgl<20){
        echo "gemini";
    } if($tgl>19&&$tgl<30){
        echo "aries";
    }
} if($bln=5){
    if ($tgl>0&&$tgl<20){
        echo "taurus";
    } if($tgl>19&&$tgl<30){
        echo "leo";
    }
} if($bln=6){
    if ($tgl>0&&$tgl<20){
        echo "leo";
    } if($tgl>19&&$tgl<30){
        echo "penyabar";
    }
} if($bln=7){
    if ($tgl>0&&$tgl<20){
        echo "cancer";
    } if($tgl>19&&$tgl<30){
        echo "cancel";
    }
} if($bln=8){
    if ($tgl>0&&$tgl<20){
        echo "gemini";
    } if($tgl>19&&$tgl<30){
        echo "carcer";
    }
} if($bln=9){
    if ($tgl>0&&$tgl<20){
        echo "aquamen";
    } if($tgl>19&&$tgl<30){
        echo "gemini";
    }
} if($bln=10){
    if ($tgl>0&&$tgl<20){
        echo "sagitarius";
    } if($tgl>19&&$tgl<30){
        echo "aqurius";
    }
} if($bln=11){
    if ($tgl>0&&$tgl<20){
        echo "tikus";
    } if($tgl>19&&$tgl<30){
        echo "taurus";
    }
} if($bln=12){
    if ($tgl>0&&$tgl<20){
        echo "vegetarian";
    } if($tgl>19&&$tgl<30){
        echo "sagitarius";
    }
} else{
    echo $tom;
}



?>
