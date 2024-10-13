// import React, { useEffect, useState } from "react";
// import axios from "axios";

// const CategoryList = () => {
//     const [categories, setCategories] = useState([]);

//     useEffect(() => {
//         const fetchCategories = async () => {
//             const response = await axios.get("/api/categories");
//             setCategories(response.data);
//         };
//         fetchCategories();
//     }, []);

//     return (
//         <div>
//             <h1>Danh Sách Danh Mục</h1>
//             <ul>
//                 {categories.map((category) => (
//                     <li key={category.id}>{category.name}</li>
//                 ))}
//             </ul>
//         </div>
//     );
// };

// export default CategoryList;
