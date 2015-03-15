#Android QRCode 讀取

##讀取QRcode的訊息,當然就需要QRCode Scaner

##我所使用QRCode Scaner library[zxing](https://github.com/zxing/zxing/tree/master/android)

##將library加入到自己的Project裡

##並在Project的AndroidManifest.xml加入
```
		<activity
            android:name="com.google.zxing.client.android.CaptureActivity"
            android:configChanges="orientation|keyboardHidden"
            android:screenOrientation="landscape"
            android:theme="@android:style/Theme.NoTitleBar.Fullscreen"
            android:windowSoftInputMode="stateAlwaysHidden" >
            <intent-filter>
                <action android:name="com.google.zxing.client.android.SCAN" />

                <category android:name="android.intent.category.DEFAULT" />
            </intent-filter>
        </activity>
```
##將掃描Qrcode的畫面開啟加入到AndroidManifest.xml,這樣才能開啟Ａctivity

##並執行以下程式碼就可以開啟
```
			 try {

					Intent intent = new Intent(
							"com.google.zxing.client.android.SCAN");
							//還有其他模式可以選擇
					intent.putExtra("SCAN_MODE", "QR_CODE_MODE");
					startActivityForResult(intent, 0);

				} catch (Exception e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
					Toast.makeText(getApplicationContext(), "ERROR:" + e, 1).show();

				}
```
##並在掃描後返回從onActivityResult中取得結果
```

	@Override
	protected void onActivityResult(int requestCode, int resultCode, Intent data) {
		// TODO Auto-generated method stub
		super.onActivityResult(requestCode, resultCode, data);
		if (requestCode == 0) {

			if (resultCode == RESULT_OK) {
                //這邊取得結果
				String result = data.getStringExtra("SCAN_RESULT");
			} else if (resultCode == RESULT_CANCELED) {
				tv_result.setText("Press a button to start a scan.\n"+"Scan cancelled.");
			}
		}

	}
```




