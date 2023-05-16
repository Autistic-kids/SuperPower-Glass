import 'dart:io';
import 'package:flutter/material.dart';
import 'package:kids/Reposiories/Model/model_insance.dart';
import 'package:kids/view/home_screen.dart';
import 'package:kids/view/sign_up.dart';
import 'package:firebase_auth/firebase_auth.dart';
import 'package:shared_preferences/shared_preferences.dart';


class LoginS extends StatefulWidget {
  const LoginS({Key? key}) : super(key: key);

  @override
  State<LoginS> createState() => _LoginSState();
}

class _LoginSState extends State<LoginS> {
  final userController = TextEditingController();
  final passController = TextEditingController();

  @override
  void initState() {
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return WillPopScope(
      onWillPop: () => exit(0),
      child: Scaffold(
        appBar: AppBar(
          title: const Text(
            "Login",
          ),
          centerTitle: true,
          automaticallyImplyLeading: false,
          // backgroundColor: Colors.red,
        ),
        body: Center(
          child: SingleChildScrollView(
            child: SizedBox(
              width: 400,
              child: Column(
                mainAxisAlignment: MainAxisAlignment.start,
                crossAxisAlignment: CrossAxisAlignment.center,
                children: [
                  SizedBox(
                    width: MediaQuery.of(context).size.width - 50,
                    child: const Text(
                      "Login",
                      style: TextStyle(
                        fontSize: 30,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                  ),
                  const SizedBox(
                    height: 20,
                  ),
                  // logo image
                  SizedBox(
                    width: 200,
                    height: 200,
                    child: Image.asset(
                      "images/logo.png",
                      fit: BoxFit.contain,
                    ),
                  ),
                  const SizedBox(height: 25,),
                  Column(
                    children: [
                      SizedBox(
                        width: MediaQuery.of(context).size.width - 50,
                        child: Row(
                          children: const [Icon(Icons.person), Text("Email")],
                        ),
                      ),
                      SizedBox(
                        width: MediaQuery.of(context).size.width - 50,
                        child: TextField(
                          // initialValue: action,
                          controller: userController,
                          decoration: const InputDecoration(
                            hintText: "Enter Email",
                          ),
                        ),
                      ),
                    ],
                  ),
                  const SizedBox(
                    height: 10,
                  ),
                  Column(
                    children: [
                      SizedBox(
                        width: MediaQuery.of(context).size.width - 50,
                        child: Row(
                          children: const [Icon(Icons.lock), Text("Password")],
                        ),
                      ),
                      SizedBox(
                        width: MediaQuery.of(context).size.width - 50,
                        child: TextField(
                          // initialValue: action,
                          obscureText: true,
                          controller: passController,
                          decoration: const InputDecoration(
                            hintText: "Enter Password",
                          ),
                        ),
                      ),
                      Row(
                        mainAxisAlignment: MainAxisAlignment.center,
                        children: [
                          const Text("Don't have an account?"),
                          TextButton(
                            onPressed: () {
                              Navigator.of(context).push(MaterialPageRoute<void>(
                                fullscreenDialog: true,
                                builder: (context) => const SignUp(),
                              ));
                            },
                            child: const Text("Register"),
                          ),
                        ],
                      ),
                      const SizedBox(
                        height: 25,
                      ),
                      SizedBox(
                        width: MediaQuery.of(context).size.width * 0.8,
                        height: 50,
                        child: ElevatedButton(
                            onPressed: () async {
                              await FirebaseAuth.instance
                                  .signInWithEmailAndPassword(
                                      email: userController.text,
                                      password: passController.text)
                                  .then((value) async {
                                activeUserID = value.user!.uid;
                                // Obtain shared preferences.
                                final SharedPreferences prefs = await SharedPreferences.getInstance();
                                // Save an String value to 'action' key.
                                await prefs.setString('ID', activeUserID);
                                Navigator.of(context).push(MaterialPageRoute<void>(
                                  fullscreenDialog: true,
                                  builder: (context) => const HomeScreen(),
                                ));
                              });
                            },
                            child: const Text(
                              "Login",
                              style: TextStyle(fontSize: 18),
                            )),
                      ),
                    ],
                  ),
                ],
              ),
            ),
          ),
        ),
      ),
    );
  }
}
