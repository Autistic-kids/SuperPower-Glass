import 'package:cloud_firestore/cloud_firestore.dart';
import 'package:flutter/material.dart';
import 'package:kids/Reposiories/Model/model_insance.dart';
import 'package:youtube_player_flutter/youtube_player_flutter.dart';

class Level3Page extends StatefulWidget {
  const Level3Page({Key? key}) : super(key: key);

  @override
  State<Level3Page> createState() => _Level3PageState();
}

class _Level3PageState extends State<Level3Page> {
  final YoutubePlayerController _situation1Controller = YoutubePlayerController(
    initialVideoId: '3dzKih0pZtk',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _storyOFChickenController = YoutubePlayerController(
    initialVideoId: 'YgskcC0i5ps',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _story2Controller = YoutubePlayerController(
    initialVideoId: 'kcv6xOaVfMA',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _story3Controller = YoutubePlayerController(
    initialVideoId: 'ZFj_h4uKHHQ',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _story4Controller = YoutubePlayerController(
    initialVideoId: 'k_C-KdriJSc',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _story5Controller = YoutubePlayerController(
    initialVideoId: 'bmbah08BIYM',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );
  final YoutubePlayerController _emotionsController = YoutubePlayerController(
    initialVideoId: 'HVlDzTItmaA',
    flags: const YoutubePlayerFlags(
      autoPlay: true,
      mute: false,
    ),
  );

  @override
  Widget build(BuildContext context) {
    return DefaultTabController(
        length: 7,
        child: Scaffold(
          appBar: AppBar(
            title: const Text(
              "Level 3",
            ),
            centerTitle: true,
            automaticallyImplyLeading: false,
            bottom: const TabBar(
              isScrollable: true,
              tabs: [
                Tab(
                  text: "Situation",
                ),
                Tab(
                  text: "Story 1",
                ),
                Tab(
                  text: "Story 2",
                ),
                Tab(
                  text: "Story 3",
                ),
                Tab(
                  text: "Story 4",
                ),
                Tab(
                  text: "Story 5",
                ),
                Tab(
                  text: "Emotions",
                ),
              ],
            ),
          ),
          body: TabBarView(
            children: [
              Center(
                child: YoutubePlayer(
                  controller: _situation1Controller,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _situation1Controller.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _storyOFChickenController,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _storyOFChickenController.play();},
                  ),
                ),
              Center(
                child: YoutubePlayer(
                  controller: _story2Controller,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _story2Controller.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _story3Controller,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _story3Controller.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _story4Controller,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _story4Controller.play();
                  },
                ),
              ),
              Center(
                child: YoutubePlayer(
                  controller: _story5Controller,
                  showVideoProgressIndicator: true,
                  onReady: () {
                    _story5Controller.play();
                  },
                ),
              ),
              Center(
                child: Column(
                  mainAxisAlignment: MainAxisAlignment.spaceBetween,
                  crossAxisAlignment: CrossAxisAlignment.end,
                  children: [
                    const SizedBox(
                      height: 50,),
                    YoutubePlayer(
                      controller: _emotionsController,
                      showVideoProgressIndicator: true,
                      onReady: () {
                        _emotionsController.play();
                      },
                    ),
                    Padding(
                      padding: const EdgeInsets.all(12),
                      child: FloatingActionButton(
                        onPressed: () {
                          FirebaseFirestore.instance.collection("users data").doc(activeUserID).update({
                            "VideoID": "4",
                          });
                          Future.delayed(const Duration(seconds: 7), () {
                            FirebaseFirestore.instance.collection("users data").doc(activeUserID).update({
                              "VideoID": "3",
                            });                        });
                        },
                        child: const Icon(Icons.send_to_mobile),
                      ),
                    ),
                  ],
                ),
              ),
            ],
          ),
        ));
  }
}
