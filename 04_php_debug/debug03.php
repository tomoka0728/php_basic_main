<?php
// デバック練習問題
// コードを読みデバックしつつジャンケンゲームを完成させてください。
// 判定が勝った時のみ勝利回数を表示させてください。
// 例)
// 山田太郎はグーを出しました。
// 相手はチョキを出しました。
// 勝敗は勝ちです。
// 3回目の勝利です。
// $_SESSIONの挙動やswitch文については調べてみてください。

session_start();

if (! isset($_SESSION['result'])) {
    $_SESSION['result'] = 0;
}

class Player
{
    public function jankenConverter(int $choice)
    {
        $janken = '';
        switch ($choice) {
            case 1:
                $janken = 'グー';
                break;
            case 2:
                $janken = 'チョキ';
                break;
            case 3:
                $janken = 'パー';
                break;
            default:
                break;
        }
        return $janken;
    }
}

class Me extends Player
{
    public $lastName;
    public $firstName;
    public $choice;

    public function __construct($lastName, $firstName, $choice)
    {
        $this->lastName     = $lastName;
        $this->firstName    = $firstName;
        $this->choice       = $choice;
    }

    public function getName()
    {
        return $this->lastName.$this->firstName;
    }

    public function getChoice()
    {
        return $this->jankenConverter($this->choice);
    }
}

class Enemy extends Player
{
    public $choice;
    public function __construct($choice)
    {
        $this->choice = random_int(1, 3);
    }

    public function getChoice()
    {
        return $this->jankenConverter($this->choice);
    }
}

class Battle
{
    public $first;
    public $second;
    public function __construct(Me $me, Enemy $enemy)
    {
        $this->first  = $me->getChoice();
        $this->second = $enemy->getChoice();
    }

    public function judge()
    {
        if ($this->first === $this->second) {
            return '引き分け';
        }

        if ($this->first === 'グー' && $this->second === 'チョキ') {
            return '勝ち';
        }

        if ($this->first === 'グー' && $this->second === 'パー') {
            return '負け';
        }

        if ($this->first === 'チョキ' && $this->second === 'グー') {
            return '負け';
        }

        if ($this->first === 'チョキ' && $this->second === 'パー') {
            return '勝ち';
        }

        if ($this->first === 'パー' && $this->second === 'グー') {
            return '勝ち';
        }

        if ($this->first === 'パー' && $this->second === 'チョキ') {
            return '負け';
        }
    }

    public function countVictories()
    {
        if ($this->judge() === '勝ち') {
            $_SESSION['result']++;
        }
    }

    public function getVitories()
    {
        $this->countVictories();
        return $_SESSION['result'];
    }

    public function showResult()
    {
        return $this->judge();
    }
}

if (! empty($_POST['lastName']) && ! empty($_POST['firstName']) && ! empty($_POST['choice'])) {
    $me    = new Me($_POST['lastName'], $_POST['firstName'], $_POST['choice']);
    $enemy = new Enemy($_POST['choice']);
    echo $me->getName().'は'.$me->getChoice().'を出しました。';
    echo '<br>';
    echo '相手は'.$enemy->getChoice().'を出しました。';
    echo '<br>';
    $battle = new Battle($me, $enemy);
    echo '勝敗は'.$battle->showResult().'です。';
    if ($battle->showResult() === '勝ち') {
        echo '<br>';
        echo $battle->getVitories().'回目の勝利です。';
    }
}

//var_dump ($_SESSION);
//var_dump ($_POST);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>デバック練習</title>
</head>
<body>
    <section>
    <form action='./debug03.php' method="post">
        <label>姓</label>
        <input type="text" name="lastName" value="<?php echo '山田' ?>" />
        <label>名</label>
        <input type="text" name="firstName" value="<?php echo '太郎' ?>" />
        <select name='choice'>
            <option value=0 >--</option>
            <option value=1 >グー</option>
            <option value=2 >チョキ</option>
            <option value=3 >パー</option>
        </select>
        <input type="submit" value="送信する"/>
    </form>
    </section>
</body>
</html>
