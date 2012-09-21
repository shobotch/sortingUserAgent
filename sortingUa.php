<?php
/**
 * スマートフォンかどうかを振り分ける簡易的なクラスです。
 *
 * @package sortingUa
 * @author shobotch
 * @sinse PHP 5.3.8
 * @version 1.0.0
 */
class sortingUa
{

    /*
     * ユーザーエージェントを格納しています。
    */
    private $ua;

    /**
     * チェックした結果を格納します。
     * @var string
     */
    private $type;

    /*
     * 第一引数にUAの情報を入れてください。
    * @param string $ua
    * @return string
    */

    public function __construct($ua)
    {
        $this->ua = $ua;
        return $this->check();
    }

    /*
     * 後から別のUAをチェックしたい時に再セットします。
    * @param string $ua
    * @return string スマホだったらsp その他はPC
    */
    public function setUa($ua)
    {
        $this->ua = $ua;
        return $this->check();
    }
    /*
     * UAからスマートフォンか判別します。
    * switch文のcase文を増やすことによって振り分け条件を追加することができます。
    * @return string スマホだったらsp その他はPC
    */
    public function getUa()
    {
        return $this->check();
    }

    private function check()
    {
        switch (true) {
            case (preg_match('#\b(iP(hone|od);|Android )|dream|blackberry9500|blackberry9530|blackberry9520|blackberry9550|blackberry9800|CUPCAKE|webOS|incognito|webmate#', $this->ua)):
                $this->type = "sp";
                break;

            default:
                $this->type = "pc";
            break;
        }
        return $this->type;
    }
}
