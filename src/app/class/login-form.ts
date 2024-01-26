export class LoginForm {
    email: string;
    password: string;
    getToken:boolean

  
    constructor() {
      this.email = '';
      this.password = '';
      this.getToken = true;
    }
  }