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

<h1 class="ml-20 mt-8 text-lg"><b>CREATE</b></h1><br>

<form action="{{ route('store') }}" method="post">

    @csrf

    <table>
        <tr>
            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="ORDERNUMBER" class="block text-sm font-medium text-gray-700">Orden Number</label>
                    <div>
                        <input type="number" name="ORDERNUMBER" id="ORDERNUMBER" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="QUANTITYORDERED" class="block text-sm font-medium text-gray-700">Quantity Ordered</label>
                    <div>
                        <input type="number" name="QUANTITYORDERED" id="QUANTITYORDERED" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="PRICEEACH" class="block text-sm font-medium text-gray-700">Price Each</label>
                    <div>
                        <input type="text" name="PRICEEACH" id="PRICEEACH" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

        </tr>

        <tr>
            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="ORDERLINENUMBER" class="block text-sm font-medium text-gray-700">Order Line Number</label>
                    <div>
                        <input type="number" name="ORDERLINENUMBER" id="ORDERLINENUMBER" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="SALES" class="block text-sm font-medium text-gray-700">Sales</label>
                    <div>
                        <input type="text" name="SALES" id="SALES" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="ORDERDATE" class="block text-sm font-medium text-gray-700">Order Date</label>
                    <div>
                        <input type="text" name="ORDERDATE" id="ORDERDATE" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="STATUS" class="block text-sm font-medium text-gray-700">Status</label>
                    <div>
                        <input type="text" name="STATUS" id="STATUS" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="QTR_ID" class="block text-sm font-medium text-gray-700">QTR ID</label>
                    <div>
                        <input type="number" name="QTR_ID" id="QTR_ID" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="MONTH_ID" class="block text-sm font-medium text-gray-700">Month ID</label>
                    <div>
                        <input type="number" name="MONTH_ID" id="MONTH_ID" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="YEAR_ID" class="block text-sm font-medium text-gray-700">Year ID</label>
                    <div>
                        <input type="number" name="YEAR_ID" id="YEAR_ID" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="PRODUCTLINE" class="block text-sm font-medium text-gray-700">Product Line</label>
                    <div>
                        <input type="text" name="PRODUCTLINE" id="PRODUCTLINE" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="MSRP" class="block text-sm font-medium text-gray-700">MSRP</label>
                    <div>
                        <input type="number" name="MSRP" id="MSRP" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="PRODUCTCODE" class="block text-sm font-medium text-gray-700">Product Code</label>
                    <div>
                        <input type="text" name="PRODUCTCODE" id="PRODUCTCODE" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="CUSTOMERNAME" class="block text-sm font-medium text-gray-700">Customer Name</label>
                    <div>
                        <input type="text" name="CUSTOMERNAME" id="CUSTOMERNAME" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="PHONE" class="block text-sm font-medium text-gray-700">Phone</label>
                    <div>
                        <input type="text" name="PHONE" id="PHONE" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="ADDRESSLINE1" class="block text-sm font-medium text-gray-700">Address Line 1</label>
                    <div>
                        <input type="text" name="ADDRESSLINE1" id="ADDRESSLINE1" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="ADDRESSLINE2" class="block text-sm font-medium text-gray-700">Address Line 2</label>
                    <div>
                        <input type="text" name="ADDRESSLINE2" id="ADDRESSLINE2" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="CITY" class="block text-sm font-medium text-gray-700">City</label>
                    <div>
                        <input type="text" name="CITY" id="CITY" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="STATE" class="block text-sm font-medium text-gray-700">State</label>
                    <div>
                        <input type="text" name="STATE" id="STATE" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="POSTALCODE" class="block text-sm font-medium text-gray-700">Postal Code</label>
                    <div>
                        <input type="text" name="POSTALCODE" id="POSTALCODE" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="COUNTRY" class="block text-sm font-medium text-gray-700">Country</label>
                    <div>
                        <input type="text" name="COUNTRY" id="COUNTRY" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="TERRITORY" class="block text-sm font-medium text-gray-700">Territory</label>
                    <div>
                        <input type="text" name="TERRITORY" id="TERRITORY" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="CONTACTLASTNAME" class="block text-sm font-medium text-gray-700">Contact Last Name</label>
                    <div>
                        <input type="text" name="CONTACTLASTNAME" id="CONTACTLASTNAME" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="CONTACTFIRSTNAME" class="block text-sm font-medium text-gray-700">Contact First Name</label>
                    <div>
                        <input type="text" name="CONTACTFIRSTNAME" id="CONTACTFIRSTNAME" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="flex-column ml-20 mt-3">
                    <label for="DEALSIZE" class="block text-sm font-medium text-gray-700">Deal Size</label>
                    <div>
                        <input type="text" name="DEALSIZE" id="DEALSIZE" class="w-80 h-7 text-center shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-2 border-gray-800 rounded-md">
                    </div>
                </div>
            </td>

            <td>
            </td>

            <td>
            </td>
        </tr>
    </table>

    <div class="flex-end mt-4 ml-56 mr-48 text-center">
        <button type="submit" class="ml-72 w-32 text-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Enviar
        </button>
    </div>

</form>

<div class="flex-end mt-4 ml-56 mr-48 text-center">
    <form action="/">
        <button type="submit" class="ml-72 w-32 text-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Cancelar
        </button>
    </form>
</div>

</body>
</html>

