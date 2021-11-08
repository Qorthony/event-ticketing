export const getUrlPoster = (url) =>{
    let protocol = url.split(":")[0]
    return protocol==='http'||protocol==='https'?url:"/storage/"+url
}
