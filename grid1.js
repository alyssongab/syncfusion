
ej.grids.Grid.Inject(ej.grids.Page);
var grid = new ej.grids.Grid({
    dataSource: data,
    columns: [
                { field: 'OrderID', headerText: 'ID Pedido', textAlign: 'Right', width: 120, type: 'number' },
                { field: 'CustomerID', width: 140, headerText: 'ID do Cliente', type: 'string' },
                { field: 'Freight', headerText: 'Frete', textAlign: 'Right', width: 120, format: 'C' },
                { field: 'OrderDate', headerText: 'Data do Pedido', width: 140, format: 'dd/MM/yyyy' }
    ],
    allowPaging: true,
    pageSettings: { pageSize: 7 }
});

grid.appendTo('#Grid');