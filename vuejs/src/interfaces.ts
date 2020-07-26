export interface Post_Interface{
    title:string,
    img:string,
    desc:string
}
export interface User{
    email:string,
    password:string,
    username:string
}
export interface PostInterface{
    title:string,
    img:string,
    desc:string
}
export interface Storeinterface{
    articles: Post_Interface[],
    user: User&{posts:Post_Interface[]},
    isAuth: boolean,
    errors: {
        login:string[],
        signup:string[],
        createpost:string[]
     },
    csrf:string,
    searchResult:Post_Interface[]
}