# Git and Workflows

## Brief "history"
- Centrailized / Decentralized / (*Local data model)
- Open-source / Proprietary
- ~45 of VCS (Vesion-Control Software)





---

### Why Git?
- Designed by *Linus Torvalds*
- Based on the needs of the Linux kernel project
	- aims to be fast, flexible, and robust
- SaaS





---

## Git & Workflows
- It's all about the branches
- Branches help define workflow
- As simple or complex as necessary
- Pull Requests
- Integrations (build, test, deploy)





---

## Workflow
- There is *no universal solution* for every team's needs
- A good workflow positions all of the *tools, processes, and people*, for optimum happiness and productivity
- Git (Hub/Lab) gives you the *flexiblility* to define the best workflow for you
- It puts your code at the center of your development process and provides sensible tools for managing changes to your software and getting it where it needs to go





---

### Branching
- Is a core part of managing parallel software development
- Git, the version control system
	- create, destroy and combine branches with minimal effort






---

## Pull Requests
- Merge Requests in GitLab
- When changes is ready for review
- It is normal for changes to be [commented on](https://github.com/nette/tracy/pull/241)





---

### The GitHub Flow [link](https://youtu.be/aJnFGMclhU8?t=105)
- Project has a singular master branch where all released work lives
- Temporary feature branches where new development takes place
- PR -> Review -> Changes approved -> Deploy -> Merge*





---

### Git Flow [link](https://youtu.be/aJnFGMclhU8?t=257)
- Robust branching strategy
- Long lived branches
- Simultaneous development
- New features & current releases





---

### Two primary branches
- master - will always reflect the most current production-ready state of the software
- develop - reflects the latest development for the next release

### Supporting branches
- Feature branches
- Release branches help you prepare the work on develop that will be included in the next release version
	- Ok
- Hotfix branches let you make critical changes to the master branch without impeding work on develop or the next release




---

### Git Flow
- Long lived branches
- Simultaneous development
- New features & current releases

- Master - most current production ready state of software)
- Develop - reflex development for next release (testing)
- Feature branches
- Release branch (testing)
- Hotfix - critical changes to the master branch without impeding work on develop or the nex release




---

### Oxy Flow
- 2-3 long lived branches
- Feature branches

```
feature      O---O---O---O
            /         \   \
testing ---O-----------O---O
                        \   \
staging -----------------O---O     (optional)
                          \   \
master  -------------------O---O
```

- Packages like more the GitHub flow




---

## Version Control Best Practices
- Commit related changes (2 bugs => 2commits)
- Commit often
- Don’t Commit Half-Done Work*
- Test before you commit
- Write good commit messages




---

### Other
- Badges
- Rebase Git workflow
- Fixup




---

### Any question?




---

## References
- https://en.wikipedia.org/wiki/List_of_version-control_software
- https://en.wikipedia.org/wiki/Git
- https://en.wikipedia.org/wiki/GitHub
- https://www.youtube.com/watch?v=aJnFGMclhU8
- https://www.git-tower.com/learn/git/ebook/en/command-line/appendix/best-practices
- https://guides.github.com/introduction/flow/
- https://filip-prochazka.com/blog/git-fixup
