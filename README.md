# CF7 Add Default

Contact Form 7 の初期値を GET パラメータから設定する

## Instration

解凍した zip ファイルをプラグインディレクトリにアップロードし、プラグインを有効にする。  
README.md は削除して良い。


## Usage

ContactForm7 を設置しているページへフォーム名と同じパラメータをつけてアクセスすると

> *url*  
> http://example.com/?page_id=1&your-country=2  
> 
> *html*  
> [select **your-country** "China" "India" "San Marino"]


default オプションを設定したように動作する。

> [select **your-country** "China" "India" "San Marino" **default:2**]


ショートタグ内に default オプションがある場合はそちらを優先する。  
default オプションについては [ContactForm7 のマニュアル](http://contactform7.com/ja/checkboxes-radio-buttons-and-menus/)を参照
