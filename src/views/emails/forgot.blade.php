@include("crudbooster::emails.header")

<p>Hello,</p>
<p>Someone with IP Address {{request()->server('REMOTE_ADDR')}} at {{YmdHis()}} has been requested password, the
    following is your new password : </p>
<p>Password : {{$password}}</p>

@include("crudbooster::emails.footer")