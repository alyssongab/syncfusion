ej.base.enableRipple(window.ripple)

    var names = ['AROUT', 'BERGS', 'BLONP', 'CHOPS', 'ERNSH'];
    var masterdata = window.customerData.filter(function(e){ 
        return names.indexOf(e.CustomerID) !== -1;
    });
    
    var mastergrid = new ej.grids.Grid({
        dataSource: masterdata,
        allowResizing: true,
        selectedRowIndex: 1,
        columns: [
            { field: 'ContactName', headerText: 'Customer Name', width: 150,},
            { field: 'CompanyName', headerText: 'Company Name', width: 150 },
            { field: 'Address', headerText: 'Address', width: 150 },
            { field: 'Country', headerText: 'Country', allowResizing: false, width: 130 }
        ],
        rowSelected: rowSelected,
    });
    mastergrid.appendTo('#MasterGrid');

    function rowSelected(args) {
         var selRecord = args.data;
         grid.dataSource = window.data.filter(function(record){
             return (record.CustomerName === selRecord.ContactName);
            }).slice(0, 5);
        document.getElementById("key").innerHTML = selRecord.ContactName;
    }

    var grid = new ej.grids.Grid({
        allowSelection: false,
        allowResizing: true,
        columns: [
            { field: 'OrderID', headerText: 'Order ID', width: 100, textAlign: 'Right' },
            { field: 'Freight', headerText: 'Freight', width: 100, format: 'C2', type:'number' },
            { field: 'ShipName', headerText: 'Ship Name', width: 200},
            { field: 'ShipCountry', headerText: 'Ship Country', width: 150 },
            { field: 'ShipAddress', headerText: 'Ship Address', allowResizing: false, width: 200 },
        ]
    });
    grid.appendTo('#DetailGrid');


