import logo from './logo.svg';
import './App.css';
import DataGrid from './components/Datagrid';
import DataGridPerso from './components/DatagridPerso';
import { BrowserRouter, Route, Routes } from 'react-router-dom';

function App() {
  return (
    <div className="App">
      

      <BrowserRouter>
      <Routes>
        <Route path="/" element={<DataGrid/>} />
          <Route path="/contact" element={<DataGridPerso/>} />
        </Routes>
      </BrowserRouter>
    </div>
  );
}

export default App;
