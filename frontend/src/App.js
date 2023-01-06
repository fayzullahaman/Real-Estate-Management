import { Route, Routes } from "react-router-dom";
import "./App.css";
import Main from "./pages/Main";
import Home from "./components/Home";
import About from "./pages/About";
import Contact from "./pages/Contact";
import Testimonial from "./pages/Testimonial";
import Property_list from "./pages/Property_list";
import Property_type from "./pages/Property_type";
import Property_agent from "./pages/Property_agent";
import ProductList from "./pages/ProductList";
import Error from "./pages/Error";
import Teams from "./pages/Teams";

function App() {
  return (
    <>
      <Routes>
        <Route path="/" element={<Main />}>
          <Route index element={<Home />} />
          <Route path="/about" element={<About />} />
          <Route path="/contact" element={<Contact />} />
          <Route path="/testimonial" element={<Testimonial />} />
          <Route path="/team" element={<Teams />} />
          <Route path="/property_list" element={<Property_list />} />
          <Route path="/property_type" element={<Property_type />} />
          <Route path="/property_agent" element={<Property_agent />} />
          <Route path="/products" element={<ProductList />} />
          <Route path="/error" element={<Error />} />
        </Route>
      </Routes>
    </>
  );
}

export default App;
