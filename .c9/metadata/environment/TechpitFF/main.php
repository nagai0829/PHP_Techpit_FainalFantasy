{"filter":false,"title":"main.php","tooltip":"/TechpitFF/main.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "],"id":117}],[{"start":{"row":35,"column":4},"end":{"row":35,"column":5},"action":"insert","lines":["/"],"id":118},{"start":{"row":35,"column":5},"end":{"row":35,"column":6},"action":"insert","lines":["/"]}],[{"start":{"row":35,"column":6},"end":{"row":35,"column":9},"action":"insert","lines":["現在の"],"id":119},{"start":{"row":35,"column":9},"end":{"row":35,"column":10},"action":"insert","lines":["H"]},{"start":{"row":35,"column":10},"end":{"row":35,"column":11},"action":"insert","lines":["P"]}],[{"start":{"row":35,"column":11},"end":{"row":35,"column":12},"action":"insert","lines":["の"],"id":120},{"start":{"row":35,"column":12},"end":{"row":35,"column":14},"action":"insert","lines":["表示"]}],[{"start":{"row":44,"column":5},"end":{"row":45,"column":0},"action":"insert","lines":["",""],"id":121},{"start":{"row":45,"column":0},"end":{"row":45,"column":5},"action":"insert","lines":["     "]},{"start":{"row":45,"column":5},"end":{"row":45,"column":6},"action":"insert","lines":["/"]},{"start":{"row":45,"column":6},"end":{"row":45,"column":7},"action":"insert","lines":["/"]}],[{"start":{"row":45,"column":7},"end":{"row":45,"column":9},"action":"insert","lines":["攻撃"],"id":122}],[{"start":{"row":59,"column":0},"end":{"row":60,"column":0},"action":"remove","lines":["     $goblin->doAttack($tiida);",""],"id":123}],[{"start":{"row":57,"column":15},"end":{"row":58,"column":0},"action":"insert","lines":["",""],"id":124},{"start":{"row":58,"column":0},"end":{"row":58,"column":5},"action":"insert","lines":["     "]},{"start":{"row":58,"column":5},"end":{"row":59,"column":0},"action":"insert","lines":["",""]},{"start":{"row":59,"column":0},"end":{"row":59,"column":5},"action":"insert","lines":["     "]}],[{"start":{"row":60,"column":5},"end":{"row":65,"column":6},"action":"insert","lines":["foreach ($enemies as $enemy) {","         $memberIndex = rand(0, count($members) - 1); // 添字は0から始まるので、-1する","         $member = $members[$memberIndex];","         $enemy->doAttack($member);","         echo \"\\n\";","     }"],"id":125}],[{"start":{"row":26,"column":11},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":126},{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":21},"action":"insert","lines":["$isFinishFlg = false;"],"id":127}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":3},"action":"insert","lines":["// "],"id":128}],[{"start":{"row":34,"column":68},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":129}],[{"start":{"row":35,"column":0},"end":{"row":35,"column":23},"action":"insert","lines":["while (!$isFinishFlg) {"],"id":130}],[{"start":{"row":69,"column":14},"end":{"row":70,"column":0},"action":"insert","lines":["",""],"id":131},{"start":{"row":70,"column":0},"end":{"row":70,"column":4},"action":"insert","lines":["    "]},{"start":{"row":70,"column":4},"end":{"row":71,"column":0},"action":"insert","lines":["",""]},{"start":{"row":71,"column":0},"end":{"row":71,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":71,"column":4},"end":{"row":84,"column":5},"action":"insert","lines":[" // 仲間の全滅チェック","    $deathCnt = 0; // HPが0以下の仲間の数","    foreach ($members as $member) {","        if ($member->getHitPoint() > 0) {","            $isFinishFlg = false;","            break;","        }","        $deathCnt++;","    }","    if ($deathCnt === count($members)) {","        $isFinishFlg = true;","        echo \"GAME OVER ....\\n\\n\";","        break;","    }"],"id":132}],[{"start":{"row":84,"column":5},"end":{"row":85,"column":0},"action":"insert","lines":["",""],"id":133},{"start":{"row":85,"column":0},"end":{"row":85,"column":4},"action":"insert","lines":["    "]},{"start":{"row":85,"column":4},"end":{"row":86,"column":0},"action":"insert","lines":["",""]},{"start":{"row":86,"column":0},"end":{"row":86,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":86,"column":4},"end":{"row":99,"column":5},"action":"insert","lines":[" // 敵の全滅チェック","    $deathCnt = 0; // HPが0以下の敵の数","    foreach ($enemies as $enemy) {","        if ($enemy->getHitPoint() > 0) {","            $isFinishFlg = false;","            break;","        }","        $deathCnt++;","    }","    if ($deathCnt === count($enemies)) {","        $isFinishFlg = true;","        echo \"♪♪♪ファンファーレ♪♪♪\\n\\n\";","        break;","    }"],"id":134}],[{"start":{"row":106,"column":0},"end":{"row":107,"column":105},"action":"remove","lines":["echo $tiida->getName() . \"　：　\" . $tiida->getHitPoint() . \"/\" . $tiida::MAX_HITPOINT . \"\\n\"; // ここを追加","echo $goblin->getName() . \"　：　\" . $goblin->getHitPoint() . \"/\" . $goblin::MAX_HITPOINT . \"\\n\\n\"; // ここを追加"],"id":135},{"start":{"row":106,"column":0},"end":{"row":113,"column":2},"action":"insert","lines":["// 現在のHPの表示"," foreach ($members as $member) {","     echo $member->getName() . \"　：　\" . $member->getHitPoint() . \"/\" . $member::MAX_HITPOINT . \"\\n\";"," }"," echo \"\\n\";"," foreach ($enemies as $enemy) {","     echo $enemy->getName() . \"　：　\" . $enemy->getHitPoint() . \"/\" . $enemy::MAX_HITPOINT . \"\\n\";"," }"]}],[{"start":{"row":49,"column":36},"end":{"row":51,"column":40},"action":"remove","lines":["","         $enemyIndex = rand(0, count($enemies) - 1); // 添字は0から始まるので、-1する","         $enemy = $enemies[$enemyIndex];"],"id":136}],[{"start":{"row":52,"column":0},"end":{"row":53,"column":0},"action":"remove","lines":["             $member->doAttackWhiteMage($enemy, $member);",""],"id":137}],[{"start":{"row":51,"column":49},"end":{"row":52,"column":0},"action":"insert","lines":["",""],"id":138},{"start":{"row":52,"column":0},"end":{"row":52,"column":13},"action":"insert","lines":["             "]}],[{"start":{"row":52,"column":12},"end":{"row":52,"column":13},"action":"remove","lines":[" "],"id":140},{"start":{"row":52,"column":8},"end":{"row":52,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":52,"column":8},"end":{"row":52,"column":12},"action":"insert","lines":["    "],"id":141}],[{"start":{"row":52,"column":12},"end":{"row":52,"column":75},"action":"insert","lines":["$attackResult = $member->doAttackWhiteMage($enemies, $members);"],"id":142}],[{"start":{"row":54,"column":0},"end":{"row":55,"column":0},"action":"remove","lines":["             $member->doAttack($enemy);",""],"id":143}],[{"start":{"row":54,"column":0},"end":{"row":55,"column":0},"action":"insert","lines":["",""],"id":144}],[{"start":{"row":53,"column":17},"end":{"row":54,"column":0},"action":"insert","lines":["",""],"id":145},{"start":{"row":54,"column":0},"end":{"row":54,"column":13},"action":"insert","lines":["             "]}],[{"start":{"row":54,"column":13},"end":{"row":54,"column":71},"action":"insert","lines":["$attackResult = $member->doAttack($enemies); // 配列を渡すように変更"],"id":146}],[{"start":{"row":54,"column":71},"end":{"row":55,"column":0},"action":"remove","lines":["",""],"id":147}],[{"start":{"row":62,"column":9},"end":{"row":64,"column":35},"action":"remove","lines":["$memberIndex = rand(0, count($members) - 1); // 添字は0から始まるので、-1する","         $member = $members[$memberIndex];","         $enemy->doAttack($member);"],"id":148},{"start":{"row":62,"column":9},"end":{"row":62,"column":36},"action":"insert","lines":["$enemy->doAttack($members);"]}],[{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["require_once('./classes/BlackMage.php');",""],"id":149}],[{"start":{"row":8,"column":32},"end":{"row":8,"column":33},"action":"remove","lines":["e"],"id":150},{"start":{"row":8,"column":31},"end":{"row":8,"column":32},"action":"remove","lines":["g"]},{"start":{"row":8,"column":30},"end":{"row":8,"column":31},"action":"remove","lines":["a"]},{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"remove","lines":["M"]},{"start":{"row":8,"column":28},"end":{"row":8,"column":29},"action":"remove","lines":["k"]},{"start":{"row":8,"column":27},"end":{"row":8,"column":28},"action":"remove","lines":["c"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"remove","lines":["a"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"remove","lines":["l"]},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"remove","lines":["B"]}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["m"],"id":151}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"remove","lines":["m"],"id":152}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["M"],"id":153},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":26},"action":"remove","lines":["Me"],"id":154},{"start":{"row":8,"column":24},"end":{"row":8,"column":31},"action":"insert","lines":["Message"]}],[{"start":{"row":29,"column":21},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":155},{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"insert","lines":["",""]},{"start":{"row":31,"column":0},"end":{"row":31,"column":1},"action":"insert","lines":["$"]}],[{"start":{"row":31,"column":1},"end":{"row":31,"column":2},"action":"insert","lines":["o"],"id":156},{"start":{"row":31,"column":2},"end":{"row":31,"column":3},"action":"insert","lines":["b"]},{"start":{"row":31,"column":3},"end":{"row":31,"column":4},"action":"insert","lines":["j"]},{"start":{"row":31,"column":4},"end":{"row":31,"column":5},"action":"insert","lines":["e"]}],[{"start":{"row":31,"column":5},"end":{"row":31,"column":6},"action":"insert","lines":["c"],"id":157},{"start":{"row":31,"column":6},"end":{"row":31,"column":7},"action":"insert","lines":["t"]}],[{"start":{"row":31,"column":6},"end":{"row":31,"column":7},"action":"remove","lines":["t"],"id":158},{"start":{"row":31,"column":5},"end":{"row":31,"column":6},"action":"remove","lines":["c"]},{"start":{"row":31,"column":4},"end":{"row":31,"column":5},"action":"remove","lines":["e"]},{"start":{"row":31,"column":3},"end":{"row":31,"column":4},"action":"remove","lines":["j"]},{"start":{"row":31,"column":2},"end":{"row":31,"column":3},"action":"remove","lines":["b"]},{"start":{"row":31,"column":1},"end":{"row":31,"column":2},"action":"remove","lines":["o"]}],[{"start":{"row":31,"column":1},"end":{"row":31,"column":2},"action":"insert","lines":["m"],"id":159},{"start":{"row":31,"column":2},"end":{"row":31,"column":3},"action":"insert","lines":["e"]},{"start":{"row":31,"column":3},"end":{"row":31,"column":4},"action":"insert","lines":["s"]},{"start":{"row":31,"column":4},"end":{"row":31,"column":5},"action":"insert","lines":["s"]},{"start":{"row":31,"column":5},"end":{"row":31,"column":6},"action":"insert","lines":["a"]},{"start":{"row":31,"column":6},"end":{"row":31,"column":7},"action":"insert","lines":["g"]},{"start":{"row":31,"column":7},"end":{"row":31,"column":8},"action":"insert","lines":["e"]}],[{"start":{"row":31,"column":8},"end":{"row":31,"column":9},"action":"insert","lines":["O"],"id":160},{"start":{"row":31,"column":9},"end":{"row":31,"column":10},"action":"insert","lines":["b"]},{"start":{"row":31,"column":10},"end":{"row":31,"column":11},"action":"insert","lines":["j"]},{"start":{"row":31,"column":11},"end":{"row":31,"column":12},"action":"insert","lines":["e"]}],[{"start":{"row":31,"column":12},"end":{"row":31,"column":13},"action":"insert","lines":["c"],"id":161},{"start":{"row":31,"column":13},"end":{"row":31,"column":14},"action":"insert","lines":["t"]}],[{"start":{"row":31,"column":14},"end":{"row":31,"column":15},"action":"insert","lines":[" "],"id":162},{"start":{"row":31,"column":15},"end":{"row":31,"column":16},"action":"insert","lines":["="]}],[{"start":{"row":31,"column":16},"end":{"row":31,"column":17},"action":"insert","lines":[" "],"id":163},{"start":{"row":31,"column":17},"end":{"row":31,"column":18},"action":"insert","lines":["n"]},{"start":{"row":31,"column":18},"end":{"row":31,"column":19},"action":"insert","lines":["e"]},{"start":{"row":31,"column":19},"end":{"row":31,"column":20},"action":"insert","lines":["w"]}],[{"start":{"row":31,"column":20},"end":{"row":31,"column":21},"action":"insert","lines":[" "],"id":164},{"start":{"row":31,"column":21},"end":{"row":31,"column":22},"action":"insert","lines":["M"]},{"start":{"row":31,"column":22},"end":{"row":31,"column":23},"action":"insert","lines":["e"]}],[{"start":{"row":31,"column":21},"end":{"row":31,"column":23},"action":"remove","lines":["Me"],"id":165},{"start":{"row":31,"column":21},"end":{"row":31,"column":28},"action":"insert","lines":["Message"]}],[{"start":{"row":31,"column":28},"end":{"row":31,"column":29},"action":"insert","lines":[";"],"id":166}],[{"start":{"row":41,"column":4},"end":{"row":49,"column":15},"action":"remove","lines":["//現在のHPの表示","    foreach ($members as $member) {","         echo $member->getName() . \"　：　\" . $member->getHitPoint() . \"/\" . $member::MAX_HITPOINT . \"\\n\";","     }","     echo \"\\n\";","     foreach ($enemies as $enemy) {","         echo $enemy->getName() . \"　：　\" . $enemy->getHitPoint() . \"/\" . $enemy::MAX_HITPOINT . \"\\n\";","     }","     echo \"\\n\";"],"id":167},{"start":{"row":41,"column":4},"end":{"row":45,"column":48},"action":"insert","lines":[" // 仲間の表示","    $messageObj->displayStatusMessage($members);"," ","    // 敵の表示","    $messageObj->displayStatusMessage($enemies);"]}],[{"start":{"row":101,"column":1},"end":{"row":108,"column":2},"action":"remove","lines":["/ 現在のHPの表示"," foreach ($members as $member) {","     echo $member->getName() . \"　：　\" . $member->getHitPoint() . \"/\" . $member::MAX_HITPOINT . \"\\n\";"," }"," echo \"\\n\";"," foreach ($enemies as $enemy) {","     echo $enemy->getName() . \"　：　\" . $enemy->getHitPoint() . \"/\" . $enemy::MAX_HITPOINT . \"\\n\";"," }"],"id":168},{"start":{"row":101,"column":1},"end":{"row":105,"column":46},"action":"insert","lines":["// 仲間の表示","  $messageObj->displayStatusMessage($members);"," ","  // 敵の表示","  $messageObj->displayStatusMessage($enemies);"]}],[{"start":{"row":101,"column":0},"end":{"row":101,"column":1},"action":"remove","lines":["/"],"id":169}],[{"start":{"row":101,"column":0},"end":{"row":101,"column":1},"action":"insert","lines":[" "],"id":170}],[{"start":{"row":101,"column":0},"end":{"row":101,"column":1},"action":"remove","lines":[" "],"id":171}],[{"start":{"row":101,"column":0},"end":{"row":101,"column":4},"action":"insert","lines":["    "],"id":172}],[{"start":{"row":101,"column":0},"end":{"row":101,"column":4},"action":"remove","lines":["    "],"id":173}],[{"start":{"row":101,"column":0},"end":{"row":101,"column":1},"action":"insert","lines":[" "],"id":174},{"start":{"row":101,"column":1},"end":{"row":101,"column":2},"action":"insert","lines":[" "]}],[{"start":{"row":31,"column":13},"end":{"row":31,"column":14},"action":"remove","lines":["t"],"id":175},{"start":{"row":31,"column":12},"end":{"row":31,"column":13},"action":"remove","lines":["c"]},{"start":{"row":31,"column":11},"end":{"row":31,"column":12},"action":"remove","lines":["e"]}],[{"start":{"row":66,"column":16},"end":{"row":66,"column":17},"action":"remove","lines":["ク"],"id":176},{"start":{"row":66,"column":15},"end":{"row":66,"column":16},"action":"remove","lines":["ッ"]},{"start":{"row":66,"column":14},"end":{"row":66,"column":15},"action":"remove","lines":["ェ"]},{"start":{"row":66,"column":13},"end":{"row":66,"column":14},"action":"remove","lines":["チ"]},{"start":{"row":66,"column":12},"end":{"row":66,"column":13},"action":"remove","lines":["滅"]},{"start":{"row":66,"column":11},"end":{"row":66,"column":12},"action":"remove","lines":["全"]},{"start":{"row":66,"column":10},"end":{"row":66,"column":11},"action":"remove","lines":["の"]},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"remove","lines":["間"]},{"start":{"row":66,"column":8},"end":{"row":66,"column":9},"action":"remove","lines":["仲"]},{"start":{"row":66,"column":7},"end":{"row":66,"column":8},"action":"remove","lines":[" "]},{"start":{"row":66,"column":6},"end":{"row":66,"column":7},"action":"remove","lines":["/"]},{"start":{"row":66,"column":5},"end":{"row":66,"column":6},"action":"remove","lines":["/"]},{"start":{"row":66,"column":4},"end":{"row":66,"column":5},"action":"remove","lines":[" "]}],[{"start":{"row":66,"column":4},"end":{"row":66,"column":29},"action":"insert","lines":["// 仲間全員か敵全員のHPが０になるまで繰り返す"],"id":177}],[{"start":{"row":47,"column":5},"end":{"row":64,"column":14},"action":"remove","lines":["//攻撃","     foreach ($members as $member) {","         // 白魔道士の場合、味方のオブジェクトも渡す","         if (get_class($member) == \"WhiteMage\") {","            $attackResult = $member->doAttackWhiteMage($enemies, $members);","         } else {","             $attackResult = $member->doAttack($enemies); // 配列を渡すように変更","         }","        echo \"\\n\";","     }","     echo \"\\n\";","     ","     ","     foreach ($enemies as $enemy) {","         $enemy->doAttack($members);","         echo \"\\n\";","     }","    echo \"\\n\";"],"id":178},{"start":{"row":47,"column":5},"end":{"row":51,"column":58},"action":"insert","lines":["// 仲間の攻撃","    $messageObj->displayAttackMessage($members, $enemies);"," ","    // 敵の攻撃","    $messageObj->displayAttackMessage($enemies, $members);"]}],[{"start":{"row":31,"column":26},"end":{"row":32,"column":0},"action":"insert","lines":["",""],"id":179},{"start":{"row":32,"column":0},"end":{"row":33,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":33,"column":0},"end":{"row":48,"column":3},"action":"insert","lines":[" // 終了条件の判定","  function isFinish($objects)","  {","      $deathCnt = 0; // HPが0以下の仲間の数","      foreach ($objects as $object) {","          // １人でもHPが０を超えていたらfalseを返す","          if ($object->getHitPoint() > 0) {","              return false;","          }","          $deathCnt++;","      }","      // 仲間の数が死亡数(HPが０以下の数)と同じであればtrue��返す","      if ($deathCnt === count($objects)) {","          return true;","      }","  }"],"id":180}],[{"start":{"row":70,"column":4},"end":{"row":98,"column":5},"action":"remove","lines":["// 仲間全員か敵全員のHPが０になるまで繰り返す","    $deathCnt = 0; // HPが0以下の仲間の数","    foreach ($members as $member) {","        if ($member->getHitPoint() > 0) {","            $isFinishFlg = false;","            break;","        }","        $deathCnt++;","    }","    if ($deathCnt === count($members)) {","        $isFinishFlg = true;","        echo \"GAME OVER ....\\n\\n\";","        break;","    }","    ","     // 敵の全滅チェック","    $deathCnt = 0; // HPが0以下の敵の数","    foreach ($enemies as $enemy) {","        if ($enemy->getHitPoint() > 0) {","            $isFinishFlg = false;","            break;","        }","        $deathCnt++;","    }","    if ($deathCnt === count($enemies)) {","        $isFinishFlg = true;","        echo \"♪♪♪ファンファーレ♪♪♪\\n\\n\";","        break;","    }"],"id":181},{"start":{"row":70,"column":4},"end":{"row":81,"column":5},"action":"insert","lines":["// 戦闘終了条件のチェック 仲間全員のHPが0 または、敵全員のHPが0","    $isFinishFlg = isFinish($members);","    if ($isFinishFlg) {","        $message = \"GAME OVER ....\\n\\n\";","        break;","    }"," ","    $isFinishFlg = isFinish($enemies);","    if ($isFinishFlg) {","        $message = \"♪♪♪ファンファーレ♪♪♪\\n\\n\";","        break;","    }"]}],[{"start":{"row":87,"column":24},"end":{"row":88,"column":0},"action":"insert","lines":["",""],"id":182}],[{"start":{"row":88,"column":0},"end":{"row":88,"column":2},"action":"insert","lines":["  "],"id":183}],[{"start":{"row":88,"column":2},"end":{"row":88,"column":16},"action":"insert","lines":["echo $message;"],"id":184}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["require_once('./classes/Human.php');",""],"id":185}],[{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"remove","lines":["n"],"id":186},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"remove","lines":["a"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"remove","lines":["m"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["u"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["H"]}],[{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["L"],"id":187},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["i"]}],[{"start":{"row":4,"column":24},"end":{"row":4,"column":26},"action":"remove","lines":["Li"],"id":188},{"start":{"row":4,"column":24},"end":{"row":4,"column":29},"action":"insert","lines":["Lives"]}],[{"start":{"row":3,"column":0},"end":{"row":10,"column":40},"action":"remove","lines":["","require_once('./classes/Lives.php');","require_once('./classes/Human.php');","require_once('./classes/Enemy.php');","require_once('./classes/Brave.php');","require_once('./classes/BlackMage.php');","require_once('./classes/Message.php');","require_once('./classes/WhiteMage.php');"],"id":189},{"start":{"row":3,"column":0},"end":{"row":9,"column":22},"action":"insert","lines":["require_once('./lib/Loader.php');"," ","  // オートロード","  $loader = new Loader();","  // classesフォルダの中身をロード対象ディレクトリとして登録","  $loader->regDirectory(__DIR__ . '/classes');","  $loader->register();"]}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"remove","lines":[" "],"id":190},{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"remove","lines":[" "],"id":191},{"start":{"row":6,"column":0},"end":{"row":6,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"remove","lines":[" "],"id":192},{"start":{"row":7,"column":0},"end":{"row":7,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":8,"column":1},"end":{"row":8,"column":2},"action":"remove","lines":[" "],"id":193},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":9,"column":1},"end":{"row":9,"column":2},"action":"remove","lines":[" "],"id":194},{"start":{"row":9,"column":0},"end":{"row":9,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"insert","lines":["require_once('./lib/Loader.php');",""],"id":195}],[{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"remove","lines":["r"],"id":196},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"remove","lines":["e"]},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"remove","lines":["d"]},{"start":{"row":4,"column":22},"end":{"row":4,"column":23},"action":"remove","lines":["a"]},{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"remove","lines":["o"]},{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"remove","lines":["L"]}],[{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"insert","lines":["U"],"id":197},{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"insert","lines":["t"]},{"start":{"row":4,"column":22},"end":{"row":4,"column":23},"action":"insert","lines":["i"]},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["l"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["i"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["t"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["y"]}],[{"start":{"row":34,"column":0},"end":{"row":55,"column":68},"action":"remove","lines":[" // 終了条件の判定","  function isFinish($objects)","  {","      $deathCnt = 0; // HPが0以下の仲間の数","      foreach ($objects as $object) {","          // １人でもHPが０を超えていたらfalseを返す","          if ($object->getHitPoint() > 0) {","              return false;","          }","          $deathCnt++;","      }","      // 仲間の数が死亡数(HPが０以下の数)と同じであればtrueを返す","      if ($deathCnt === count($objects)) {","          return true;","      }","  }","","","// echo $tiida->name . \"\\n\";","// echo $goblin->name . \"\\n\";","","// while ($tiida->getHitPoint() > 0 && $goblin->getHitPoint() > 0) {"],"id":198},{"start":{"row":33,"column":0},"end":{"row":34,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"insert","lines":["$loader->regDirectory(__DIR__ . '/classes');",""],"id":199}],[{"start":{"row":10,"column":41},"end":{"row":10,"column":42},"action":"insert","lines":["/"],"id":200},{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"insert","lines":["c"]},{"start":{"row":10,"column":43},"end":{"row":10,"column":44},"action":"insert","lines":["o"]}],[{"start":{"row":10,"column":42},"end":{"row":10,"column":44},"action":"remove","lines":["co"],"id":201},{"start":{"row":10,"column":42},"end":{"row":10,"column":47},"action":"insert","lines":["const"]}],[{"start":{"row":10,"column":46},"end":{"row":10,"column":47},"action":"remove","lines":["t"],"id":202},{"start":{"row":10,"column":45},"end":{"row":10,"column":46},"action":"remove","lines":["s"]}],[{"start":{"row":10,"column":45},"end":{"row":10,"column":46},"action":"insert","lines":["t"],"id":203}],[{"start":{"row":10,"column":45},"end":{"row":10,"column":46},"action":"remove","lines":["t"],"id":204}],[{"start":{"row":10,"column":45},"end":{"row":10,"column":46},"action":"insert","lines":["s"],"id":205},{"start":{"row":10,"column":46},"end":{"row":10,"column":47},"action":"insert","lines":["t"]}],[{"start":{"row":10,"column":47},"end":{"row":10,"column":48},"action":"insert","lines":["n"],"id":206},{"start":{"row":10,"column":48},"end":{"row":10,"column":49},"action":"insert","lines":["t"]},{"start":{"row":10,"column":49},"end":{"row":10,"column":50},"action":"insert","lines":["s"]}],[{"start":{"row":10,"column":47},"end":{"row":10,"column":48},"action":"insert","lines":["a"],"id":207}],[{"start":{"row":14,"column":0},"end":{"row":16,"column":35},"action":"remove","lines":["$members[] = new Brave('ティーダ');","$members[] = new WhiteMage('ユウナ');","$members[] = new BlackMage('ルールー');"],"id":208},{"start":{"row":14,"column":0},"end":{"row":16,"column":50},"action":"insert","lines":["$members[] = new Brave(CharacterName::TIIDA);","  $members[] = new WhiteMage(CharacterName::YUNA);","  $members[] = new BlackMage(CharacterName::RULU);"]}],[{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"remove","lines":[" "],"id":209}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":[" "],"id":210}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":[" "],"id":211}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"remove","lines":[" "],"id":212}],[{"start":{"row":19,"column":0},"end":{"row":21,"column":35},"action":"remove","lines":["$enemies[] = new Enemy('ゴブリン', 20);","$enemies[] = new Enemy('ボム', 25);","$enemies[] = new Enemy('モルボル', 30);"],"id":213},{"start":{"row":19,"column":0},"end":{"row":21,"column":48},"action":"insert","lines":["$enemies[] = new Enemy(EnemyName::GOBLINS, 20);","  $enemies[] = new Enemy(EnemyName::BOMB, 25);","  $enemies[] = new Enemy(EnemyName::MORBOL, 30);"]}],[{"start":{"row":20,"column":1},"end":{"row":20,"column":2},"action":"remove","lines":[" "],"id":214},{"start":{"row":20,"column":0},"end":{"row":20,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":21,"column":1},"end":{"row":21,"column":2},"action":"remove","lines":[" "],"id":215},{"start":{"row":21,"column":0},"end":{"row":21,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"remove","lines":["$members[] = new Brave(CharacterName::TIIDA);",""],"id":216}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":217}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":54},"action":"insert","lines":["$members[] = Brave::getInstance(CharacterName::TIIDA);"],"id":218}]]},"ace":{"folds":[],"scrolltop":56,"scrollleft":0,"selection":{"start":{"row":21,"column":46},"end":{"row":21,"column":46},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1614518283338,"hash":"25e16d01e9c77475c84678c91459f84cfe482e80"}