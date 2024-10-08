// import React, { useEffect, useState } from "react";
// import axios from "axios";

// const ProductVariantList = () => {
//     const [variants, setVariants] = useState([]);

//     useEffect(() => {
//         const fetchVariants = async () => {
//             const response = await axios.get("/api/product-variants");
//             setVariants(response.data);
//         };
//         fetchVariants();
//     }, []);

//     return (
//         <div>
//             <h1>Danh Sách Biến Thể Sản Phẩm</h1>
//             <ul>
//                 {variants.map((variant) => (
//                     <li key={variant.id}>{variant.name}</li>
//                 ))}
//             </ul>
//         </div>
//     );
// };

// export default ProductVariantList;
