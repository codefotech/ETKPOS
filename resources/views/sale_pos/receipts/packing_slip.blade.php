<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- <link rel="stylesheet" href="style.css"> -->
<title>Receipt-4561</title>


<style type="text/css">
    .f-8 {
        font-size: 8px !important;
    }

    body {
        color: #000000;
    }

    @media print {
        * {
            font-size: 16px;
            font-family: 'Times New Roman';
            word-break: break-all;
        }

        .f-8 {
            font-size: 8px !important;
        }

        .headings {
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .sub-headings {
            font-size: 15px;
            font-weight: 700;
        }

        .border-top {
            border-top: 1px solid #242424;
        }

        .border-bottom {
            border-bottom: 1px solid #242424;
        }

        .border-bottom-dotted {
            border-bottom: 1px dotted darkgray;
        }

        td.serial_number, th.serial_number {
            width: 5%;
            max-width: 5%;
        }

        td.description,
        th.description {
            width: 35%;
            max-width: 35%;
        }

        td.quantity,
        th.quantity {
            width: 15%;
            max-width: 15%;
            word-break: break-all;
        }

        td.unit_price, th.unit_price {
            width: 25%;
            max-width: 25%;
            word-break: break-all;
        }

        td.price,
        th.price {
            width: 20%;
            max-width: 20%;
            word-break: break-all;
        }

        .centered {
            text-align: center;
            align-content: center;
        }

        .ticket {
            width: 100%;
            max-width: 100%;

        }

        img {
            max-width: inherit;
            width: auto;
        }

        .hidden-print,
        .hidden-print * {
            display: none !important;
        }
    }

    .table-info {
        width: 100%;
    }

    .table-info tr:first-child td, .table-info tr:first-child th {
        padding-top: 8px;
    }

    .table-info th {
        text-align: left;
    }

    .table-info td {
        text-align: right;
    }

    .logo {
        float: left;
        width: 35%;
        padding: 10px;
    }

    .text-with-image {
        float: left;
        width: 65%;
    }

    .text-box {
        width: 100%;
        height: auto;
    }

    .m-0 {
        margin: 0;
    }

    .textbox-info {
        clear: both;
    }

    .textbox-info p {
        margin-bottom: 0px
    }

    .flex-box {
        display: flex;
        width: 100%;
    }

    .flex-box p {
        width: 50%;
        margin-bottom: 0px;
        white-space: nowrap;
    }

    .table-f-12 th, .table-f-12 td {
        font-size: 12px;
        word-break: break-word;
    }

    .bw {
        word-break: break-word;
    }

    .bb-lg {
        border-bottom: 1px solid lightgray;
    }

    .status-section input {
        width: 33%;
        margin-left: 40px;
    }
</style>


<div class="ticket">

    <div class="row">
        <div style="width: 50%; float: left;text-align:center;" class="col-md-6">
            <h5 style="border: 3px solid black;padding:10px 8px;font-weight: bold;">Delivery Slip</h5>
        </div>
        <div style="width: 50%; float: left;text-align:center;" class="col-md-6">
            <h5 style="border: 3px solid black;padding:10px 8px;font-weight: bold;">{{$receipt_details->invoice_no}}</h5>
        </div>
    </div>

    <div>
        <div style="width: 100%;border: 2px solid black;">
            <div style="width:100%;padding: 8px">
                <div style="display:block; ">
                    <span style="font-weight: bold">MERCHANT:</span> @if(!empty($receipt_details->display_name))
                        {{$receipt_details->display_name}}
                    @endif<br>
                </div>
                <span style="font-weight: bold"> @if(!empty($receipt_details->contact))
                        {!! $receipt_details->contact !!}
                    @endif</span>


            </div>
        </div>
        <div style="width: 20%;"></div>
    </div>

    <div class="padding-5">
		<span style="font-weight: bold;">
            @if(!empty($receipt_details->customer_label))
                <b>{{ $receipt_details->customer_label }}</b>
            @endif
        </span>
            <br>
            @if(!empty($receipt_details->customer_name))
                {{ $receipt_details->customer_name }}<br>
            @endif
            @if(!empty($receipt_details->customer_mobile))
                {!! $receipt_details->customer_mobile !!}
            @endif
            <span>
            @if(!empty($receipt_details->customer_info_address))
                {!! $receipt_details->customer_info_address !!}
            @endif
        </span>
    </div>

    <div class="padding-5">
        <strong>@lang('lang_v1.shipping_address'):</strong><br>
        {!! $receipt_details->shipping_address !!}
        @if(!empty($receipt_details->shipping_custom_field_1_label))
            <br><strong>{!!$receipt_details->shipping_custom_field_1_label!!}
                :</strong> {!!$receipt_details->shipping_custom_field_1_value ?? ''!!}
        @endif

        @if(!empty($receipt_details->shipping_custom_field_2_label))
            <br><strong>{!!$receipt_details->shipping_custom_field_2_label!!}
                :</strong> {!!$receipt_details->shipping_custom_field_2_value ?? ''!!}
        @endif

        @if(!empty($receipt_details->shipping_custom_field_3_label))
            <br><strong>{!!$receipt_details->shipping_custom_field_3_label!!}
                :</strong> {!!$receipt_details->shipping_custom_field_3_value ?? ''!!}
        @endif

        @if(!empty($receipt_details->shipping_custom_field_4_label))
            <br><strong>{!!$receipt_details->shipping_custom_field_4_label!!}
                :</strong> {!!$receipt_details->shipping_custom_field_4_value ?? ''!!}
        @endif

        @if(!empty($receipt_details->shipping_custom_field_5_label))
            <br><strong>{!!$receipt_details->shipping_custom_field_2_label!!}
                :</strong> {!!$receipt_details->shipping_custom_field_5_value ?? ''!!}
        @endif

    </div>


    <h3>Instruction</h3>
    <table style="width:100%;border: 2px solid black;">
        <tbody>
        <tr style="border:0.3px solid #D1D1D1;">
            <td>
                <h3 style="padding-left: 10px;">Due Amount</h3>
            </td>
            <td>
                <h3 style="padding-right: 10px;text-align: right;">
                    {!! $receipt_details->total_due !!}৳
                </h3>
            </td>

        </tr>
        </tbody>
    </table>


    <br>


    <div class="row">
        <div class="col-xs-12">
            <img class="center-block"
                 src="data:image/png;base64,{{DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 2,30,array(39, 48, 54), true)}}">
        </div>
    </div>
</div>


<!-- <button id="btnPrint" class="hidden-print">Print</button>
<script src="script.js"></script> -->


{{--<table style="width:100%; color: #000000 !important; ">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <td>--}}


{{--        </td>--}}
{{--    </tr>--}}
{{--    </thead>--}}

{{--    <tbody>--}}
{{--    <tr>--}}
{{--        <td colspan="1">--}}
{{--            <div class="row">--}}
{{--                <div class="col-6 col-md-6 ">Delivery Slip</div>--}}
{{--                <div class="col-6 col-md-6">Delivery Slip</div>--}}
{{--            </div>--}}

{{--        </td>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <td>--}}

{{--            <!-- business information here -->--}}
{{--            <div class="row invoice-info">--}}

{{--                <div class="col-md-6 invoice-col width-50 color-555">--}}

{{--                    <!-- Logo -->--}}
{{--                    @if(!empty($receipt_details->logo))--}}
{{--                        <img style="max-height: 120px; width: auto;" src="{{$receipt_details->logo}}" class="img">--}}
{{--                        <br/>--}}
{{--                    @endif--}}

{{--                    <!-- Shop & Location Name  -->--}}
{{--                    <p>Shop & Location Name</p>--}}
{{--                    @if(!empty($receipt_details->display_name))--}}
{{--                        <p>--}}
{{--                            <span style="font-size:24px; font-weight:900; color:black;">{{$receipt_details->display_name}}</span>--}}
{{--                            @if(!empty($receipt_details->address))--}}
{{--                                <br/>{!! $receipt_details->address !!}--}}
{{--                            @endif--}}



{{--                            @if(!empty($receipt_details->website))--}}
{{--                                <br/>{{ $receipt_details->website }}--}}
{{--                            @endif--}}

{{--                            @if(!empty($receipt_details->tax_info1))--}}
{{--                                <br/>{{ $receipt_details->tax_label1 }} {{ $receipt_details->tax_info1 }}--}}
{{--                            @endif--}}

{{--                            @if(!empty($receipt_details->tax_info2))--}}
{{--                                <br/>{{ $receipt_details->tax_label2 }} {{ $receipt_details->tax_info2 }}--}}
{{--                            @endif--}}

{{--                            @if(!empty($receipt_details->location_custom_fields))--}}
{{--                                <br/>{{ $receipt_details->location_custom_fields }}--}}
{{--                            @endif--}}
{{--                        </p>--}}
{{--                    @endif--}}
{{--                </div>--}}

{{--                <div class="col-md-6 invoice-col width-50">--}}

{{--                    <p class="text-right font-30">--}}
{{--                        @if(!empty($receipt_details->invoice_no_prefix))--}}
{{--                            <span class="pull-left">{!! $receipt_details->invoice_no_prefix !!}</span>--}}
{{--                        @endif--}}

{{--                        {{$receipt_details->invoice_no}}--}}
{{--                    </p>--}}
{{--                    <!-- Date-->--}}
{{--                    @if(!empty($receipt_details->date_label))--}}
{{--                        <p class="text-right font-23 color-555">--}}
{{--				<span class="pull-left">--}}
{{--					{{$receipt_details->date_label}}--}}
{{--				</span>--}}

{{--                            {{$receipt_details->invoice_date}}--}}
{{--                        </p>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row invoice-info color-555">--}}
{{--                <br/>--}}
{{--                <div class="col-md-6 invoice-col width-50 word-wrap">--}}
{{--                    @if(!empty($receipt_details->customer_label))--}}
{{--                        <b>{{ $receipt_details->customer_label }}</b><br/>--}}
{{--                    @endif--}}

{{--                    <!-- customer info -->--}}
{{--                    @if(!empty($receipt_details->customer_name))--}}
{{--                        {{ $receipt_details->customer_name }}<br>--}}
{{--                    @endif--}}
{{--                    @if(!empty($receipt_details->customer_info))--}}
{{--                        {!! $receipt_details->customer_info !!}--}}
{{--                    @endif--}}
{{--                    @if(!empty($receipt_details->client_id_label))--}}
{{--                        <br/>--}}
{{--                        <strong>{{ $receipt_details->client_id_label }}</strong> {{ $receipt_details->client_id }}--}}
{{--                    @endif--}}
{{--                    @if(!empty($receipt_details->customer_tax_label))--}}
{{--                        <br/>--}}
{{--                        <strong>{{ $receipt_details->customer_tax_label }}</strong> {{ $receipt_details->customer_tax_number }}--}}
{{--                    @endif--}}
{{--                    @if(!empty($receipt_details->customer_custom_fields))--}}
{{--                        <br/>{!! $receipt_details->customer_custom_fields !!}--}}
{{--                    @endif--}}
{{--                    @if(!empty($receipt_details->sales_person_label))--}}
{{--                        <br/>--}}
{{--                        <strong>{{ $receipt_details->sales_person_label }}</strong> {{ $receipt_details->sales_person }}--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <div class="col-md-6 invoice-col width-50 word-wrap">--}}
{{--                    <strong>@lang('lang_v1.shipping_address'):</strong><br>--}}
{{--                    {!! $receipt_details->shipping_address !!}--}}
{{--                    @if(!empty($receipt_details->shipping_custom_field_1_label))--}}
{{--                        <br><strong>{!!$receipt_details->shipping_custom_field_1_label!!}--}}
{{--                            :</strong> {!!$receipt_details->shipping_custom_field_1_value ?? ''!!}--}}
{{--                    @endif--}}

{{--                    @if(!empty($receipt_details->shipping_custom_field_2_label))--}}
{{--                        <br><strong>{!!$receipt_details->shipping_custom_field_2_label!!}--}}
{{--                            :</strong> {!!$receipt_details->shipping_custom_field_2_value ?? ''!!}--}}
{{--                    @endif--}}

{{--                    @if(!empty($receipt_details->shipping_custom_field_3_label))--}}
{{--                        <br><strong>{!!$receipt_details->shipping_custom_field_3_label!!}--}}
{{--                            :</strong> {!!$receipt_details->shipping_custom_field_3_value ?? ''!!}--}}
{{--                    @endif--}}

{{--                    @if(!empty($receipt_details->shipping_custom_field_4_label))--}}
{{--                        <br><strong>{!!$receipt_details->shipping_custom_field_4_label!!}--}}
{{--                            :</strong> {!!$receipt_details->shipping_custom_field_4_value ?? ''!!}--}}
{{--                    @endif--}}

{{--                    @if(!empty($receipt_details->shipping_custom_field_5_label))--}}
{{--                        <br><strong>{!!$receipt_details->shipping_custom_field_2_label!!}--}}
{{--                            :</strong> {!!$receipt_details->shipping_custom_field_5_value ?? ''!!}--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row color-555">--}}
{{--                <div class="col-xs-12">--}}
{{--                    <br/>--}}
{{--                    <table class="table table-bordered table-no-top-cell-border">--}}
{{--                        <thead>--}}
{{--                        <tr style="background-color: #357ca5 !important; color: white !important; font-size: 20px !important"--}}
{{--                            class="table-no-side-cell-border table-no-top-cell-border text-center">--}}
{{--                            <td style="background-color: #357ca5 !important; color: white !important; width: 5% !important">--}}
{{--                                #--}}
{{--                            </td>--}}

{{--                            <td style="background-color: #357ca5 !important; color: white !important; width: 65% !important">--}}
{{--                                {{$receipt_details->table_product_label}}--}}
{{--                            </td>--}}

{{--                            <td style="background-color: #357ca5 !important; color: white !important; width: 30% !important;">--}}
{{--                                {{$receipt_details->table_qty_label}}--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach($receipt_details->lines as $line)--}}
{{--                            <tr>--}}
{{--                                <td class="text-center">--}}
{{--                                    {{$loop->iteration}}--}}
{{--                                </td>--}}
{{--                                <td style="word-break: break-all;">--}}
{{--                                    {{$line['name']}} {{$line['product_variation']}} {{$line['variation']}}--}}
{{--                                    @if(!empty($line['sub_sku']))--}}
{{--                                        , {{$line['sub_sku']}}--}}
{{--                                    @endif @if(!empty($line['brand']))--}}
{{--                                        , {{$line['brand']}}--}}
{{--                                    @endif--}}
{{--                                    @if(!empty($line['product_custom_fields']))--}}
{{--                                        , {{$line['product_custom_fields']}}--}}
{{--                                    @endif--}}
{{--                                    @if(!empty($line['sell_line_note']))--}}
{{--                                        ({!!$line['sell_line_note']!!})--}}
{{--                                    @endif--}}
{{--                                    @if(!empty($line['lot_number']))--}}
{{--                                        <br> {{$line['lot_number_label']}}:  {{$line['lot_number']}}--}}
{{--                                    @endif--}}
{{--                                    @if(!empty($line['product_expiry']))--}}
{{--                                        , {{$line['product_expiry_label']}}:  {{$line['product_expiry']}}--}}
{{--                                    @endif--}}
{{--                                </td>--}}
{{--                                <td class="text-right">--}}
{{--                                    {{$line['quantity']}} {{$line['units']}}--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            @if(!empty($line['modifiers']))--}}
{{--                                @foreach($line['modifiers'] as $modifier)--}}
{{--                                    <tr>--}}
{{--                                        <td class="text-center">--}}
{{--                                            &nbsp;--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            {{$modifier['name']}} {{$modifier['variation']}}--}}
{{--                                            @if(!empty($modifier['sub_sku']))--}}
{{--                                                , {{$modifier['sub_sku']}}--}}
{{--                                            @endif--}}
{{--                                            @if(!empty($modifier['sell_line_note']))--}}
{{--                                                ({!!$modifier['sell_line_note']!!})--}}
{{--                                            @endif--}}
{{--                                        </td>--}}
{{--                                        <td class="text-right">--}}
{{--                                            {{$modifier['quantity']}} {{$modifier['units']}}--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                        @endforeach--}}

{{--                        @php--}}
{{--                            $lines = count($receipt_details->lines);--}}
{{--                        @endphp--}}

{{--                        @for ($i = $lines; $i < 7; $i++)--}}
{{--                            <tr>--}}
{{--                                <td>&nbsp;</td>--}}
{{--                                <td>&nbsp;</td>--}}
{{--                                <td>&nbsp;</td>--}}
{{--                            </tr>--}}
{{--                        @endfor--}}

{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row invoice-info color-555" style="page-break-inside: avoid !important">--}}
{{--                <div class="col-md-6 invoice-col width-50">--}}
{{--                    <b class="pull-left">@lang('lang_v1.authorized_signatory')</b>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            Barcode--}}
{{--            @if($receipt_details->show_barcode)--}}
{{--                <br>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xs-12">--}}
{{--                        <img class="center-block"--}}
{{--                             src="data:image/png;base64,{{DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 2,30,array(39, 48, 54), true)}}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            @if(!empty($receipt_details->footer_text))--}}
{{--                <div class="row color-555">--}}
{{--                    <div class="col-xs-12">--}}
{{--                        {!! $receipt_details->footer_text !!}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--        </td>--}}
{{--    </tr>--}}
{{--    </tbody>--}}
{{--</table>--}}