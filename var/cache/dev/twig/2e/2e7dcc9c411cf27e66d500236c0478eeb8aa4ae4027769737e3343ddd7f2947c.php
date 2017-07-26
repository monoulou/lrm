<?php

/* MALrmBundle:Candidat:show.html.twig */
class __TwigTemplate_c67bb4b637edf0931d39e031beb782e5402d1bc3b9b03c6dabed5882a7e05339 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Candidat:show.html.twig", 1);
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
        $__internal_5fb9e5d604e9b8cf6dc7f93a36cd92c889ac32421f8a5282f499a17edfb07537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb9e5d604e9b8cf6dc7f93a36cd92c889ac32421f8a5282f499a17edfb07537->enter($__internal_5fb9e5d604e9b8cf6dc7f93a36cd92c889ac32421f8a5282f499a17edfb07537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:show.html.twig"));

        $__internal_323502f76e4540577ec741f357322f2555a9dacbb2eb1c2490ac89e0ee8339b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323502f76e4540577ec741f357322f2555a9dacbb2eb1c2490ac89e0ee8339b3->enter($__internal_323502f76e4540577ec741f357322f2555a9dacbb2eb1c2490ac89e0ee8339b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fb9e5d604e9b8cf6dc7f93a36cd92c889ac32421f8a5282f499a17edfb07537->leave($__internal_5fb9e5d604e9b8cf6dc7f93a36cd92c889ac32421f8a5282f499a17edfb07537_prof);

        
        $__internal_323502f76e4540577ec741f357322f2555a9dacbb2eb1c2490ac89e0ee8339b3->leave($__internal_323502f76e4540577ec741f357322f2555a9dacbb2eb1c2490ac89e0ee8339b3_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61824e6727391fe52d1d256773304cdf9acc24567d63d7240febb846c8ff7f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61824e6727391fe52d1d256773304cdf9acc24567d63d7240febb846c8ff7f10->enter($__internal_61824e6727391fe52d1d256773304cdf9acc24567d63d7240febb846c8ff7f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dcba20967c1e879c692ff49c2e8325ef7b932cb0583fc1a3e0b3e9ef140bb23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcba20967c1e879c692ff49c2e8325ef7b932cb0583fc1a3e0b3e9ef140bb23b->enter($__internal_dcba20967c1e879c692ff49c2e8325ef7b932cb0583fc1a3e0b3e9ef140bb23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_dcba20967c1e879c692ff49c2e8325ef7b932cb0583fc1a3e0b3e9ef140bb23b->leave($__internal_dcba20967c1e879c692ff49c2e8325ef7b932cb0583fc1a3e0b3e9ef140bb23b_prof);

        
        $__internal_61824e6727391fe52d1d256773304cdf9acc24567d63d7240febb846c8ff7f10->leave($__internal_61824e6727391fe52d1d256773304cdf9acc24567d63d7240febb846c8ff7f10_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71c1ae19fbd155a9cbd153a9979e0cd73d27ce9feed96ff34e73ec0d8a44d28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c1ae19fbd155a9cbd153a9979e0cd73d27ce9feed96ff34e73ec0d8a44d28c->enter($__internal_71c1ae19fbd155a9cbd153a9979e0cd73d27ce9feed96ff34e73ec0d8a44d28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d89262120d3e270b40ffcde028522a38860bb7e4b909f89f8d10a70e7346abf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89262120d3e270b40ffcde028522a38860bb7e4b909f89f8d10a70e7346abf4->enter($__internal_d89262120d3e270b40ffcde028522a38860bb7e4b909f89f8d10a70e7346abf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d89262120d3e270b40ffcde028522a38860bb7e4b909f89f8d10a70e7346abf4->leave($__internal_d89262120d3e270b40ffcde028522a38860bb7e4b909f89f8d10a70e7346abf4_prof);

        
        $__internal_71c1ae19fbd155a9cbd153a9979e0cd73d27ce9feed96ff34e73ec0d8a44d28c->leave($__internal_71c1ae19fbd155a9cbd153a9979e0cd73d27ce9feed96ff34e73ec0d8a44d28c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_90f2a4e97819ab9da3de9cfb1dc5548602dc97b890e3c41e61fbd8bf32f7726f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f2a4e97819ab9da3de9cfb1dc5548602dc97b890e3c41e61fbd8bf32f7726f->enter($__internal_90f2a4e97819ab9da3de9cfb1dc5548602dc97b890e3c41e61fbd8bf32f7726f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18f03c4199c26467723f25fac3e9b858409d40375786dc7992926ff40cb55d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f03c4199c26467723f25fac3e9b858409d40375786dc7992926ff40cb55d78->enter($__internal_18f03c4199c26467723f25fac3e9b858409d40375786dc7992926ff40cb55d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
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
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 24
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Candidat:show.html.twig", 24)->display($context);
        // line 25
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 27
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Candidat:show.html.twig", 27)->display($context);
        // line 28
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>PROFIL CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE VISUALISATION D'UN CANDIDAT:</h5>
    </div>
    <div class=\"row\">
        <div class=\" col-lg-5\"><h1>";
        // line 38
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</h1></div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_edit", array("id" => $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()))), "html", null, true);
        echo "\" >METTRE A JOUR</a>
        </div>
    </div>


    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Numéro de candidat</th>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
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
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "age", array()), "html", null, true);
        echo " ans</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 67
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
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CV</th>
                <td><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/cvtheque/" . $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "cvCandidat", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "cvCandidat", array()), "html", null, true);
        echo "</a></td>
                ";
        // line 81
        echo "            </tr>
            <tr>
                <th>Commentaires</th>
                <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "commentaire", array()), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-offset-10 col-lg-2\">
            ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_candidat\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer ce candidat ?');\">Supprimer</button>
            ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>




";
        
        $__internal_18f03c4199c26467723f25fac3e9b858409d40375786dc7992926ff40cb55d78->leave($__internal_18f03c4199c26467723f25fac3e9b858409d40375786dc7992926ff40cb55d78_prof);

        
        $__internal_90f2a4e97819ab9da3de9cfb1dc5548602dc97b890e3c41e61fbd8bf32f7726f->leave($__internal_90f2a4e97819ab9da3de9cfb1dc5548602dc97b890e3c41e61fbd8bf32f7726f_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Candidat:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 93,  234 => 91,  224 => 84,  219 => 81,  213 => 79,  206 => 75,  199 => 71,  188 => 67,  181 => 63,  174 => 59,  167 => 55,  160 => 51,  147 => 41,  139 => 38,  127 => 28,  125 => 27,  121 => 25,  119 => 24,  112 => 19,  106 => 17,  98 => 15,  96 => 14,  90 => 10,  81 => 9,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
            <div class=\"col-lg-offset-10\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>
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
        <h3>PROFIL CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE VISUALISATION D'UN CANDIDAT:</h5>
    </div>
    <div class=\"row\">
        <div class=\" col-lg-5\"><h1>{{ candidat.nom|upper }} {{ candidat.prenom }}</h1></div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"{{ path('ma_lrm_candidat_edit', { 'id': candidat.id }) }}\" >METTRE A JOUR</a>
        </div>
    </div>


    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Numéro de candidat</th>
                <td>{{ candidat.id }}</td>
            </tr>
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
                <td>{{ candidat.age }} ans</td>
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
            <tr>
                <th>Commentaires</th>
                <td>{{ candidat.commentaire }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-offset-10 col-lg-2\">
            {{ form_start(delete_form) }}
            <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_candidat\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer ce candidat ?');\">Supprimer</button>
            {{ form_end(delete_form) }}
        </div>
    </div>




{% endblock %}", "MALrmBundle:Candidat:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Candidat\\show.html.twig");
    }
}
