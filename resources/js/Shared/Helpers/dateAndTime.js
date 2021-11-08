export const parseTgl = (dateTime) => {
    return dateTime.split(" ")[0];
}

export const parseWaktu = (dateTime) => {
    let time = dateTime.split(" ")[1];
    let hourAndMinute = time.split(":")
    hourAndMinute.splice(2,1)
    // console.log(hourAndMinute.join(":"));
    return hourAndMinute.join(":");
}
