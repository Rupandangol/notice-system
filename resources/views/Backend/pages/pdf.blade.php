<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #outerContainer {
            border: 5px double black;
            height: 600px;
        }
    </style>
    <title>Document</title>
</head>
<body>

<div id="outerContainer">
    <div>
        <div style="float: left">
            <h2> &nbsp;Written Test Admit Card <br> <span style="font-size: 16px">&nbsp;&nbsp;{{$studentData->position}}-{{$studentData->bankName}}</span>
            </h2>
        </div>
        <div style="float: right">
            <img style="width: 150px;height: 90px" src="{{URL::to('uploads/logo-02.png')}}" alt="">
        </div>
    </div>

    <hr style="margin-bottom:-10px ;padding: 1px;clear: both">
    <div style="float:right;margin-right: 10px" id="right">
        <h3 style="">ID No: <br> {{$studentData->studentID}}</h3>
        <div style="width: 2in;height: 2in;border: 1px dotted black;">
            <p style="margin-top: 70px;margin-right:10px;text-align: center">
            Paste your recent PP Size Photo here
            </p>
        </div>
    </div>
    <div style="float: left" id="left">
        <h4>Written Test Detail <br>
            <span style="font-size: 14px;font-weight: normal;margin-left: 5px">Date of written test &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Shrawan 9, 2072 (July 25, 2015); Saturday</span><br>
            <span style="font-size: 14px;font-weight: normal;margin-left: 5px">Reporting Time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 7:30Am Sharp</span><br>
            <span
                style="font-size: 14px;font-weight: normal;margin-left: 5px">Written Test Start Time  : 8:00Am Sharp</span><br>
            <span style="font-size: 14px;font-weight: normal;margin-left: 5px">Written Test Venue &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <span
                    style="font-weight: bold">GoldenGate International College <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Battisputali, Kathmandu</span></span>
        </h4>
        <span style="font-size: 12px">
            <ul>
                <li>You must bring this Admit Card and Original Valid ID card to attend the Written Test</li>
                <li>You should bring Black Pen and Calculator for the test purpose.</li>
            </ul>
            <ul>
                <li>
                    All information and the documents provided during the recruitment & selection process are <br> true, original and correct.
                    I agree that, if the provided information is found false <br> or misleading , my application may lead to disqualification at any stage of selection process.
                    <br>I also accept to bear all the incurred losses causes to the bank/Recruitment Agency and strive <br> to uphold the highest standards of human Resource policies
                    of the company.
                </li>
            </ul>
        </span>
        <div>
            <h4 style="margin-left: 5px">Name: {{ucfirst($studentData->name)}}</h4>
            <h4 style="margin-left: 5px;margin-top:-10px; ">Signature: ........................................ </h4>
        </div>
    </div>
    <hr style="clear: both;margin-top: -10px">
    <div style="margin-left: 5px">
        <h4>For Official User(To be filled on Written Test day):</h4>
        <h4 style="margin-top: -10px">
            WT room no: <br>
            <br>Authorized Signature: ............................................
        </h4>
    </div>

</div>

</body>
</html>
