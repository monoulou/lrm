<?php

/* MALrmBundle:Gestion:detail.html.twig */
class __TwigTemplate_b1e9514306bd578d7e879a95ad46cd2fd87c7bd4f8c78c801d050ab71892aea1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Gestion:detail.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_902bdbddcd049007fd617823993d110db45cf35708ae1b4413a27335d7fc31d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902bdbddcd049007fd617823993d110db45cf35708ae1b4413a27335d7fc31d2->enter($__internal_902bdbddcd049007fd617823993d110db45cf35708ae1b4413a27335d7fc31d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:detail.html.twig"));

        $__internal_373b05faf4daa913875f757b70ffd9cea1a74506f2b5f61b74a553d180a42c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373b05faf4daa913875f757b70ffd9cea1a74506f2b5f61b74a553d180a42c0f->enter($__internal_373b05faf4daa913875f757b70ffd9cea1a74506f2b5f61b74a553d180a42c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_902bdbddcd049007fd617823993d110db45cf35708ae1b4413a27335d7fc31d2->leave($__internal_902bdbddcd049007fd617823993d110db45cf35708ae1b4413a27335d7fc31d2_prof);

        
        $__internal_373b05faf4daa913875f757b70ffd9cea1a74506f2b5f61b74a553d180a42c0f->leave($__internal_373b05faf4daa913875f757b70ffd9cea1a74506f2b5f61b74a553d180a42c0f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d11f617fcee8a1d1876c56023d3706c76aab4721c2e0422565353d2f6b21846b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11f617fcee8a1d1876c56023d3706c76aab4721c2e0422565353d2f6b21846b->enter($__internal_d11f617fcee8a1d1876c56023d3706c76aab4721c2e0422565353d2f6b21846b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6d21633f841fe3e9196a69542cd23c63f6916bd765328678040e9c2186589389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d21633f841fe3e9196a69542cd23c63f6916bd765328678040e9c2186589389->enter($__internal_6d21633f841fe3e9196a69542cd23c63f6916bd765328678040e9c2186589389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_6d21633f841fe3e9196a69542cd23c63f6916bd765328678040e9c2186589389->leave($__internal_6d21633f841fe3e9196a69542cd23c63f6916bd765328678040e9c2186589389_prof);

        
        $__internal_d11f617fcee8a1d1876c56023d3706c76aab4721c2e0422565353d2f6b21846b->leave($__internal_d11f617fcee8a1d1876c56023d3706c76aab4721c2e0422565353d2f6b21846b_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1fdead6ed4c5312016473d095d2a0059f3b90a7ea149effd7debf846c0fbabcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdead6ed4c5312016473d095d2a0059f3b90a7ea149effd7debf846c0fbabcf->enter($__internal_1fdead6ed4c5312016473d095d2a0059f3b90a7ea149effd7debf846c0fbabcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_12c0c01c5bd0450b214e128eaebf7f0ed067dc21ba0e706a3d9576034da99d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c0c01c5bd0450b214e128eaebf7f0ed067dc21ba0e706a3d9576034da99d38->enter($__internal_12c0c01c5bd0450b214e128eaebf7f0ed067dc21ba0e706a3d9576034da99d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_12c0c01c5bd0450b214e128eaebf7f0ed067dc21ba0e706a3d9576034da99d38->leave($__internal_12c0c01c5bd0450b214e128eaebf7f0ed067dc21ba0e706a3d9576034da99d38_prof);

        
        $__internal_1fdead6ed4c5312016473d095d2a0059f3b90a7ea149effd7debf846c0fbabcf->leave($__internal_1fdead6ed4c5312016473d095d2a0059f3b90a7ea149effd7debf846c0fbabcf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_94bf257b462354aa3ecdd4ce5339285778f19d05cc93ee431b9d793e9cfba9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bf257b462354aa3ecdd4ce5339285778f19d05cc93ee431b9d793e9cfba9eb->enter($__internal_94bf257b462354aa3ecdd4ce5339285778f19d05cc93ee431b9d793e9cfba9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc530944c1af2d9d7b77cfed88bdb75b17a03a6fc0161ae8db12ae7d28c17738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc530944c1af2d9d7b77cfed88bdb75b17a03a6fc0161ae8db12ae7d28c17738->enter($__internal_cc530944c1af2d9d7b77cfed88bdb75b17a03a6fc0161ae8db12ae7d28c17738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 17
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 19
        echo "            </div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 25
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Gestion:detail.html.twig", 25)->display($context);
        // line 26
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 28
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Gestion:detail.html.twig", 28)->display($context);
        // line 29
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>PROFIL CANDIDAT RECRUTE</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE VISUALISATION D'UN CANDIDAT</h5>
    </div>
    <div class=\"row\">
        <div class=\" col-lg-5\">
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_edit", array("id" => $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()))), "html", null, true);
        echo "\"><h1>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</h1></a>
        </div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_edit", array("id" => $this->getAttribute((isset($context["arrCandidat"]) ? $context["arrCandidat"] : $this->getContext($context, "arrCandidat")), $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()), array(), "array"))), "html", null, true);
        echo "\"><i class=\"material-icons\" style=\"margin-left: 40px\">mode_edit</i></a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_delete", array("id" => $this->getAttribute((isset($context["arrCandidat"]) ? $context["arrCandidat"] : $this->getContext($context, "arrCandidat")), $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()), array(), "array"))), "html", null, true);
        echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat pour ce poste ?')\";><i class=\"material-icons\" style=\"margin-left: 10px\">delete</i></a>
        </div>


    </div>

    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                ";
        // line 63
        if ( !twig_test_empty($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "age", array()))) {
            // line 64
            echo "                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "age", array()), "html", null, true);
            echo " ans</td>
                ";
        } else {
            // line 66
            echo "                    <td> -- </td>
                ";
        }
        // line 68
        echo "            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "adresse", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "villeCodePostal", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CV</th>
                <td><a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/cvtheque/" . $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "cvCandidat", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "cvCandidat", array()), "html", null, true);
        echo "</a></td>
                ";
        // line 85
        echo "            </tr>
            ";
        // line 86
        if (((isset($context["positif"]) ? $context["positif"] : $this->getContext($context, "positif")) == true)) {
            // line 87
            echo "                <tr>
                    <th>Nbre jours depuis l'embauche</th>
                    ";
            // line 89
            if (((isset($context["differenceJour"]) ? $context["differenceJour"] : $this->getContext($context, "differenceJour")) == 1)) {
                // line 90
                echo "                        <td>";
                echo twig_escape_filter($this->env, (isset($context["differenceJour"]) ? $context["differenceJour"] : $this->getContext($context, "differenceJour")), "html", null, true);
                echo " jour</td>
                        ";
            } else {
                // line 92
                echo "                            <td>";
                echo twig_escape_filter($this->env, (isset($context["differenceJour"]) ? $context["differenceJour"] : $this->getContext($context, "differenceJour")), "html", null, true);
                echo " jours</td>
                    ";
            }
            // line 94
            echo "                </tr>
            ";
        } else {
            // line 96
            echo "                <tr>
                    <th> Nbre de jours avant l'embauche</th>
                    ";
            // line 98
            if ((((isset($context["differenceJour"]) ? $context["differenceJour"] : $this->getContext($context, "differenceJour")) ==  -1) || ((isset($context["differenceJour"]) ? $context["differenceJour"] : $this->getContext($context, "differenceJour")) == 0))) {
                // line 99
                echo "                        <td>";
                echo twig_escape_filter($this->env, (isset($context["differenceJour"]) ? $context["differenceJour"] : $this->getContext($context, "differenceJour")), "html", null, true);
                echo " jour</td>
                    ";
            } else {
                // line 101
                echo "                        <td>";
                echo twig_escape_filter($this->env, (isset($context["differenceJour"]) ? $context["differenceJour"] : $this->getContext($context, "differenceJour")), "html", null, true);
                echo " jours</td>
                    ";
            }
            // line 103
            echo "                    ";
        }
        // line 104
        echo "                </tr>
            <tr>
                <th>Commentaires</th>
                <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "commentaire", array()), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-offset-11\">
            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gestions"]) ? $context["gestions"] : $this->getContext($context, "gestions")));
        foreach ($context['_seq'] as $context["_key"] => $context["gestion"]) {
            // line 116
            echo "                ";
            if (($this->getAttribute($this->getAttribute($context["gestion"], "candidat", array()), "id", array()) == $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()))) {
                // line 117
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_resume", array("id" => $this->getAttribute($this->getAttribute($context["gestion"], "emploi", array()), "id", array()))), "html", null, true);
                echo "\"><i class=\"material-icons\" id=\"previous\">skip_previous</i></a>
                ";
            }
            // line 119
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gestion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "        </div>
    </div>
";
        
        $__internal_cc530944c1af2d9d7b77cfed88bdb75b17a03a6fc0161ae8db12ae7d28c17738->leave($__internal_cc530944c1af2d9d7b77cfed88bdb75b17a03a6fc0161ae8db12ae7d28c17738_prof);

        
        $__internal_94bf257b462354aa3ecdd4ce5339285778f19d05cc93ee431b9d793e9cfba9eb->leave($__internal_94bf257b462354aa3ecdd4ce5339285778f19d05cc93ee431b9d793e9cfba9eb_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Gestion:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 120,  308 => 119,  302 => 117,  299 => 116,  295 => 115,  284 => 107,  279 => 104,  276 => 103,  270 => 101,  264 => 99,  262 => 98,  258 => 96,  254 => 94,  248 => 92,  242 => 90,  240 => 89,  236 => 87,  234 => 86,  231 => 85,  225 => 83,  218 => 79,  211 => 75,  200 => 71,  195 => 68,  191 => 66,  185 => 64,  183 => 63,  176 => 59,  169 => 55,  153 => 44,  142 => 40,  129 => 29,  127 => 28,  123 => 26,  121 => 25,  113 => 20,  110 => 19,  104 => 17,  98 => 15,  96 => 14,  90 => 10,  81 => 9,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

 {% block stylesheets %}
     <link href=\"{{ asset ('css/client.css') }}\" rel='stylesheet' type='text/css' />
 {% endblock %}
{% block javascripts %}
{% endblock %}

{% block body %}

    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    {% include 'navbar.html.twig' %}
    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    {% include 'sidebar.html.twig' %}
    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>PROFIL CANDIDAT RECRUTE</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE VISUALISATION D'UN CANDIDAT</h5>
    </div>
    <div class=\"row\">
        <div class=\" col-lg-5\">
            <a href=\"{{ path ('ma_lrm_candidat_edit', { 'id': candidat.id }) }}\"><h1>{{ candidat.nom|upper }} {{ candidat.prenom }}</h1></a>
        </div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"{{ path ('ma_lrm_gestion_edit', { 'id': arrCandidat[candidat.id]}) }}\"><i class=\"material-icons\" style=\"margin-left: 40px\">mode_edit</i></a><a href=\"{{ path ('ma_lrm_gestion_delete', { 'id': arrCandidat[candidat.id]}) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat pour ce poste ?')\";><i class=\"material-icons\" style=\"margin-left: 10px\">delete</i></a>
        </div>


    </div>

    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Nom</th>
                <td>{{ candidat.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ candidat.prenom }}</td>
            </tr>
            <tr>
                <th>Age</th>
                {% if candidat.age is not empty %}
                    <td>{{ candidat.age }} ans</td>
                {% else %}
                    <td> -- </td>
                {% endif %}
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ candidat.adresse }} - {{ candidat.villeCodePostal }} - {{ candidat.ville }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ candidat.telephone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ candidat.email }}</td>
            </tr>
            <tr>
                <th>CV</th>
                <td><a href=\"{{ asset('uploads/cvtheque/' ~ candidat.cvCandidat) }}\">{{ candidat.cvCandidat }}</a></td>
                {#<td><iframe src =\"{{ asset('uploads/cvtheque/' ~ candidat.cvCandidat) }}\">{{ candidat.cvCandidat }}</iframe></td>#}
            </tr>
            {% if positif == true %}
                <tr>
                    <th>Nbre jours depuis l'embauche</th>
                    {% if differenceJour == 1 %}
                        <td>{{ differenceJour }} jour</td>
                        {% else %}
                            <td>{{ differenceJour }} jours</td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <th> Nbre de jours avant l'embauche</th>
                    {% if differenceJour == -1 or differenceJour == 0 %}
                        <td>{{ differenceJour }} jour</td>
                    {% else %}
                        <td>{{ differenceJour }} jours</td>
                    {% endif %}
                    {% endif %}
                </tr>
            <tr>
                <th>Commentaires</th>
                <td>{{ candidat.commentaire }}</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-offset-11\">
            {% for gestion in gestions %}
                {% if gestion.candidat.id == candidat.id %}
                    <a href=\"{{ path('ma_lrm_gestion_resume', { 'id': gestion.emploi.id }) }}\"><i class=\"material-icons\" id=\"previous\">skip_previous</i></a>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endblock %}", "MALrmBundle:Gestion:detail.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Gestion/detail.html.twig");
    }
}
