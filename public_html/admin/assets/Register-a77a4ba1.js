import{W as c,r as p,j as e,a as x,d as f}from"./app-c0cef268.js";import{G as h}from"./GuestLayout-5241c204.js";import{T as o,I as m}from"./TextInput-af195bb1.js";import{I as n}from"./InputLabel-66d1e032.js";import{P as j}from"./PrimaryButton-2c811cee.js";import"./ApplicationLogo-94fcccf4.js";function y(){const{data:a,setData:r,post:l,processing:i,errors:t,reset:u}=c({name:"",email:"",phone:"",password:"",password_confirmation:""});p.useEffect(()=>()=>{u("password","password_confirmation")},[]);const d=s=>{s.preventDefault(),l(route("register"))};return e.jsxs(h,{children:[e.jsx(x,{title:"ثبت نام"}),e.jsxs("form",{onSubmit:d,children:[e.jsxs("div",{children:[e.jsx(n,{htmlFor:"name",value:"نام کاربری"}),e.jsx(o,{id:"name",name:"name",value:a.name,className:"mt-1 block w-full",autoComplete:"name",isFocused:!0,onChange:s=>r("name",s.target.value),required:!0}),e.jsx(m,{message:t.name,className:"mt-2"})]}),e.jsxs("div",{className:"mt-4",children:[e.jsx(n,{htmlFor:"email",value:"ایمیل"}),e.jsx(o,{id:"email",type:"email",name:"email",value:a.email,className:"mt-1 block w-full",autoComplete:"username",onChange:s=>r("email",s.target.value),required:!0}),e.jsx(m,{message:t.email,className:"mt-2"})]}),e.jsxs("div",{className:"mt-4",children:[e.jsx(n,{htmlFor:"phone",value:"شماره تماس"}),e.jsx(o,{id:"phone",type:"text",name:"phone",value:a.phone,className:"mt-1 block w-full",autoComplete:"username",onChange:s=>r("phone",s.target.value),required:!0}),e.jsx(m,{message:t.phone,className:"mt-2"})]}),e.jsxs("div",{className:"mt-4",children:[e.jsx(n,{htmlFor:"password",value:"رمز عبور"}),e.jsx(o,{id:"password",type:"password",name:"password",value:a.password,className:"mt-1 block w-full",autoComplete:"new-password",onChange:s=>r("password",s.target.value),required:!0}),e.jsx(m,{message:t.password,className:"mt-2"})]}),e.jsxs("div",{className:"mt-4",children:[e.jsx(n,{htmlFor:"password_confirmation",value:"تکرار رمز عبور "}),e.jsx(o,{id:"password_confirmation",type:"password",name:"password_confirmation",value:a.password_confirmation,className:"mt-1 block w-full",autoComplete:"new-password",onChange:s=>r("password_confirmation",s.target.value),required:!0}),e.jsx(m,{message:t.password_confirmation,className:"mt-2"})]}),e.jsxs("div",{className:"flex items-center justify-end mt-4",children:[e.jsx(f,{href:route("login"),className:"underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500",children:"Already registered?"}),e.jsx(j,{className:"ms-4",disabled:i,children:"Register"})]})]})]})}export{y as default};
