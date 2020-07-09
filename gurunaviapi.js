const url = "https://api.gnavi.co.jp/PhotoSearchAPI/v3/?keyid=9fd1f6e65ffa49c58fa7ae73edd4d572"

const set = {

    enableHighAccuracy: true,   //より高精度な位置を求める
    maximumAge: 20000,          //最後の現在地情報取得が20秒以内であればその情報を再利用する設定
    timeout: 10000              //10秒以内に現在地情報を取得できなければ、処理を終了
};