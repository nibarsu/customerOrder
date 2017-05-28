<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer Order</title>
        <style type="text/css">
        .input {width:70%;}
        </style>
    </head>
    <body>

    <div style='width:500px;height:100px;float:left;'>TEDZDOW<br/>高雄市前鎮區二聖路229-1號<br/>0925887631</div> 
    <div style='height:100px;font-size:25px;'>銷&nbsp;&nbsp;貨&nbsp;&nbsp;單</div>
    <div>
    <table style="width:800px;border:1px solid;border-collapse:collapse;">
      <tr>
      <th style='text-align:left;'  colspan="3">公司名稱：<input class='input' type='text' name='companyName' value=''></th>
      <th style='text-align:left;'  colspan="3">公司編號：<input class='input' type='text' name='companyNo' value=''></th>
      <th style='text-align:left;'  colspan="2">單據日期：<input class='input' type='text' name='formDate' value=''></th>
      </tr>
      <tr>
      <th style='text-align:left;'  colspan="3">統一編號：<input class='input' type='text' name='uniformNo' value=''></th>
      <th style='text-align:left;'  colspan="5">電話號碼：<input class='input' type='text' name='companyPhone' value=''></th>
      </tr>
      <tr>
      <th style='text-align:left;'  colspan="6">發票地址：<input class='input' type='text' name='invoiceAddr' value=''></th>
      <th style='text-align:left;'  colspan="2">單據號碼：<input class='input' type='text' name='formNo' value=''></th>
      </tr>
      <tr>
      <th style='text-align:left;'  colspan="6">送貨地址：<input class='input' type='text' name='recAddr' value=''></th>
      <th style='text-align:left;'  colspan="2">發票號碼：<input class='input' type='text' name='invoiceNo' value=''></th>
      </tr>
      <tr>
      <th style="border:1px solid;">產品編號</th>
      <th style="border:1px solid;">品名</th>
      <th style="border:1px solid;">數量</th>
      <th style="border:1px solid;">單價</th>
      <th style="border:1px solid;">折數</th>
      <th style="border:1px solid;">折扣金額</th>
      <th style="border:1px solid;">金額</th>
      <th style="border:1px solid;">備註</th>
      </tr>
      @for ($i = 0;$i<=7;$i++)
      <tr>
      <td style="border:1px solid;text-align:left ;"><input type='text' name='item01' value=''></th>
      <td style="border:1px solid;text-align:left ;"><input type='text' name='item02' value=''></th>
      <td style="border:1px solid;text-align:left ;"><input type='text' name='item03' value=''></th>
      <td style="border:1px solid;text-align:left ;"><input type='text' name='item04' value=''></th>
      <td style="border:1px solid;text-align:left ;"><input type='text' name='item05' value=''></th>
      <td style="border:1px solid;text-align:left ;"><input type='text' name='item06' value=''></th>
      <td style="border:1px solid;text-align:left ;"><input type='text' name='item07' value=''></th>
      <td style="border:1px solid;text-align:left ;"><textarea name='item08' value=''></textarea></th>
      </tr>
      @endfor
      </tr>
      <tr>
      <th style="border:1px solid;">折讓</th>
      <th colspan="3" style="border:1px solid;"><input type='text' name='subItem1' value=''></th>
      <th colspan="2" style="border:1px solid;">合計</th>
      <th style="border:1px solid;"><input type='text' name='subItem1' value=''></th>
      <th style="border:1px solid;"><input type='text' name='subItem1' value=''></th>
      </tr>
      <tr>
      <th style="border:1px solid;">已清款</th>
      <th colspan="3" style="border:1px solid;"><input type='text' name='subItem1' value=''></th>
      <th colspan="2" style="border:1px solid;">營業稅</th>
      <th style="border:1px solid;"><input type='text' name='subItem1' value=''></th>
      <th style="border:1px solid;"><input type='text' name='subItem1' value=''></th>
      </tr>
      <tr>
      <th style="border:1px solid;">未清款</th>
      <th colspan="3" style="border:1px solid;"><input type='text' name='subItem1' value=''></th>
      <th colspan="2" style="border:1px solid;">總計</th>
      <th style="border:1px solid;"><input type='text' name='subItem1' value=''></th>
      <th style="border:1px solid;"><input type='text' name='subItem1' value=''></th>
      </tr>
      <tr>
      <th style="border:1px solid;">貨單附註</th>
      <th colspan="7" style="border:1px solid;"><textarea name='subItem1' style='width:100%;'></textarea></th>
      </tr>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js"></script>
    <script>
    </script>
    </body>
</html>
