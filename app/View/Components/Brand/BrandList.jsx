// import React, { useEffect, useState } from "react";
// import axios from "axios";
// import BrandForm from "./BrandForm";

// const BrandList = () => {
//     const [brands, setBrands] = useState([]);
//     const [showForm, setShowForm] = useState(false);

//     useEffect(() => {
//         const fetchBrands = async () => {
//             const response = await axios.get("/api/brands");
//             setBrands(response.data);
//         };
//         fetchBrands();
//     }, []);

//     const handleSuccess = () => {
//         setShowForm(false);
//         fetchBrands();
//     };

//     return (
//         <div>
//             <h1>Danh Sách Thương Hiệu</h1>
//             <button onClick={() => setShowForm(true)}>Thêm Thương Hiệu</button>
//             {showForm && <BrandForm onSuccess={handleSuccess} />}
//             <ul>
//                 {brands.map((brand) => (
//                     <li key={brand.id}>{brand.name}</li>
//                 ))}
//             </ul>
//         </div>
//     );
// };

// export default BrandList;
