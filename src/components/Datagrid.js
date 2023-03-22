// import * as React from 'react';
import React, {useEffect, useState} from 'react';
import Box from '@mui/material/Box';
import { DataGrid } from '@mui/x-data-grid';
import axios from 'axios';

const columns = [
  { field: 'id', headerName: 'ID', width: 90 },
  {
    field: 'name',
    headerName: 'Name',
    width: 150,
    editable: true,
  },
  {
    field: 'username',
    headerName: 'Username',
    width: 150,
    editable: true,
  },
  {
    field: 'email',
    headerName: 'Email',
    width: 110,
  },
  {
    field: 'website',
    headerName: 'Website',
    width: 160,
  },
  {
    field: 'address',
    headerName: 'Adresse',
    width: 160,
  },
];


export default function CustomDataGrid() {
    
    const [data, setData] = useState([]) /* TO DO */

    const getData = () => {
      axios
      .get('https://jsonplaceholder.typicode.com/users')
          .then((response) => setData(response.data))
          // .catch((err) => console.log(err));
    };
    
    useEffect(() => {
      getData();
    }, []);
          
    return (
        <Box sx={{ width: '100%' }}>
        <DataGrid
            autoHeight
            rows={data}
            columns={columns}
            initialState={{
            pagination: {
                paginationModel: {
                pageSize: 5,
                },
            },
            }}
            pageSizeOptions={[5]}
            checkboxSelection
        />
        </Box>
    );
}
