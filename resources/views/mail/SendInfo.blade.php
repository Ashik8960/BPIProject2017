<!DOCTYPE html>
<html style="height: 100%;" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Information</title>
</head>
<body style="margin: 0;height: 100%">
<div>
    <h2 style="margin: 0 auto; width: 560px;background: #fff;padding: 20px">
        Bogra Polytechnics Institutional Background of you

    </h2>
    <table class="responstable" style="
    border: 1px solid #eee;
    padding: 20px 20px;
    width: 600px;
    margin: 0 auto;
    background: #fff;
">


        <tr>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;"  colspan="4">Name:</td>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;" >{{$first_name.' '.$last_name}}</td>

        </tr>
        <tr>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;" colspan="4">Email:</td>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;">{{$email}}</td>

        </tr>

        <tr>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;" colspan="4">Mobile:</td>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;">{{$mobile_no}}</td>

        </tr>

        <tr>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;" colspan="4">Home district</td>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;">{{$home_district}}</td>

        </tr>
        <tr>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;" colspan="4">File no:</td>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;">{{$file_no}}</td>

        </tr>

        <tr >
            <td style="border: 1px solid #eee;
    padding: 7px 19px;" colspan="4">Education qualification:</td>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;">{{$education_qualification}}</td>

        </tr>
        <tr>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;" colspan="4">Department:</td>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;">{{$department}}</td>

        </tr>
        <tr>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;" colspan="4">Designation:</td>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;">{{$status.' '.$designation}}</td>

        </tr>
        <tr>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;" colspan="4">Date of birth</td>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;">{{$dateOfBirth}}</td>

        </tr>
        <tr>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;" colspan="4">First join of date:</td>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;">{{$firstJointOfDate}}</td>

        </tr>
        <tr>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;" colspan="4">Present join of date:</td>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;">{{$presentJointOfDate}}</td>

        </tr>
        <tr>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;" colspan="4">Date Of return:</td>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;">{{$dateOfReturn}}</td>

        </tr>

        <tr>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;" colspan="4">Remarks:</td>
            <td style="border: 1px solid #eee;
    padding: 7px 19px;">{{$remarks}}</td>

        </tr>
    </table>

</div>
</body>
</html>