<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel-Project</title>
</head>

<body class="ml-2 mr-2">
<h1 class="text-center text-lg mt-8"><b>SALES DATA</b></h1> <br>

<form action="">
    <div class="flex ml-20 mt-2 w-96">
        <div class="w-32">Order Number:</div>
        <input type="search" name="ORDERNUMBER" value="{{ $orderNumber }}" class="h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md"><br>
    </div>
    <div class="flex ml-20 mt-2 w-96">
        <div class="w-32">Quantity:</div>
        <input type="search" name="QUANTITYORDERED" value="{{ $quantityOrdered }}" class="h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md"><br>
    </div>
    <div class="flex ml-20 mt-2 w-96">
        <div class="w-32">Price:</div>
        <input type="search" name="PRICEEACH" value="{{ $priceEach }}" class="h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md"><br>
    </div>
    <div class="flex ml-20 mt-2 w-96">
        <div class="w-32">Order Line:</div>
        <input type="search" name="ORDERLINENUMBER" value="{{ $orderLine }}" class="h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md"><br>
    </div>
    <div class="flex-end ml-20 mt-2 w-96 text-center">
        <button type="submit" class="ml-7 w-32 text-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Buscar
        </button>
    </div>
</form>

<br>

<div class="flex flex-col ml-2 mr-2">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ORDERNUMBER
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            QUANTITYORDERED
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            PRICEEACH
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ORDERLINENUMBER
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            SALES
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ORDERDATE
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            STATUS
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            QTR_ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            MONTH_ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            YEAR_ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            PRODUCTLINE
                        </th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            MSRP
                        </th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            PRODUCTCODE
                        </th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            CUSTOMERNAME
                        </th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            PHONE
                        </th>
                        </th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ADDRESSLINE1
                        </th>
                        </th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ADDRESSLINE2
                        </th>
                        </th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            CITY
                        </th>
                        </th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            STATE
                        </th>
                        </th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            POSTALCODE
                        </th>
                        </th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            COUNTRY
                        </th>
                        </th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            TERRITORY
                        </th>
                        </th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            CONTACTLASTNAME
                        </th></th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            CONTACTFIRSTNAME
                        </th></th><th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            DEALSIZE
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    <!-- Odd row -->
                    @foreach($sales as $sale)
                    <tr class="bg-white">
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->ORDERNUMBER}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->QUANTITYORDERED}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->PRICEEACH}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->ORDERLINENUMBER}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->SALES}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->ORDERDATE}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->STATUS}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->QTR_ID}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->MONTH_ID}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->YEAR_ID}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->PRODUCTLINE}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->MSRP}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->PRODUCTCODE}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->CUSTOMERNAME}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->PHONE}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->ADDRESSLINE1}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->ADDRESSLINE2}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->CITY}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->STATE}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->POSTALCODE}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->COUNTRY}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->TERRITORY}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->CONTACTLASTNAME}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->CONTACTFIRSTNAME}}
                        </td>
                        <td class="whitespace-nowrap text-sm text-center">
                            {{$sale->DEALSIZE}}
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<br>

{{$sales->links()}}

</body>
</html>
