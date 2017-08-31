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
        $__internal_565358c02a28b02b332fe12f901e774ab2ff4b5a7e0f0898ca1b39a043ff03df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565358c02a28b02b332fe12f901e774ab2ff4b5a7e0f0898ca1b39a043ff03df->enter($__internal_565358c02a28b02b332fe12f901e774ab2ff4b5a7e0f0898ca1b39a043ff03df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:detail.html.twig"));

        $__internal_b9e35c8bb0865f41f154c98459268e3fa9785a13b7e073adf9b28e4a939c8ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e35c8bb0865f41f154c98459268e3fa9785a13b7e073adf9b28e4a939c8ccb->enter($__internal_b9e35c8bb0865f41f154c98459268e3fa9785a13b7e073adf9b28e4a939c8ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_565358c02a28b02b332fe12f901e774ab2ff4b5a7e0f0898ca1b39a043ff03df->leave($__internal_565358c02a28b02b332fe12f901e774ab2ff4b5a7e0f0898ca1b39a043ff03df_prof);

        
        $__internal_b9e35c8bb0865f41f154c98459268e3fa9785a13b7e073adf9b28e4a939c8ccb->leave($__internal_b9e35c8bb0865f41f154c98459268e3fa9785a13b7e073adf9b28e4a939c8ccb_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d12d98e1b72b4e9499577771dfddb0804634999e8ef91608779b4a841635647a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12d98e1b72b4e9499577771dfddb0804634999e8ef91608779b4a841635647a->enter($__internal_d12d98e1b72b4e9499577771dfddb0804634999e8ef91608779b4a841635647a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_767fbda9e9636a6f04387f34e060acbefa13a952909a23731e0edda82fd21e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767fbda9e9636a6f04387f34e060acbefa13a952909a23731e0edda82fd21e1e->enter($__internal_767fbda9e9636a6f04387f34e060acbefa13a952909a23731e0edda82fd21e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_767fbda9e9636a6f04387f34e060acbefa13a952909a23731e0edda82fd21e1e->leave($__internal_767fbda9e9636a6f04387f34e060acbefa13a952909a23731e0edda82fd21e1e_prof);

        
        $__internal_d12d98e1b72b4e9499577771dfddb0804634999e8ef91608779b4a841635647a->leave($__internal_d12d98e1b72b4e9499577771dfddb0804634999e8ef91608779b4a841635647a_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_68b88a69b93f4184dc9571b16d637aafb8ce0c07eb45cdd8ba2cd462359b4adf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b88a69b93f4184dc9571b16d637aafb8ce0c07eb45cdd8ba2cd462359b4adf->enter($__internal_68b88a69b93f4184dc9571b16d637aafb8ce0c07eb45cdd8ba2cd462359b4adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_feb995c1bb4fb59334001486188c268c5780391b6fe4628e4550501c34465cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb995c1bb4fb59334001486188c268c5780391b6fe4628e4550501c34465cdc->enter($__internal_feb995c1bb4fb59334001486188c268c5780391b6fe4628e4550501c34465cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_feb995c1bb4fb59334001486188c268c5780391b6fe4628e4550501c34465cdc->leave($__internal_feb995c1bb4fb59334001486188c268c5780391b6fe4628e4550501c34465cdc_prof);

        
        $__internal_68b88a69b93f4184dc9571b16d637aafb8ce0c07eb45cdd8ba2cd462359b4adf->leave($__internal_68b88a69b93f4184dc9571b16d637aafb8ce0c07eb45cdd8ba2cd462359b4adf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1646c42a41df850754dc070c3e516ac00a5fd59b4373df2621d4ec5be4de88d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1646c42a41df850754dc070c3e516ac00a5fd59b4373df2621d4ec5be4de88d6->enter($__internal_1646c42a41df850754dc070c3e516ac00a5fd59b4373df2621d4ec5be4de88d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd71053f95669d1add217b2c72306c9ada0def0b0eb34542666e1e5f7bc023c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd71053f95669d1add217b2c72306c9ada0def0b0eb34542666e1e5f7bc023c9->enter($__internal_dd71053f95669d1add217b2c72306c9ada0def0b0eb34542666e1e5f7bc023c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Gestion:detail.html.twig", 24)->display($context);
        // line 25
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 27
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Gestion:detail.html.twig", 27)->display($context);
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
        <div class=\" col-lg-5\">
            <h1>";
        // line 39
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</h1>
        </div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"";
        // line 43
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
                <th>Numéro de candidat</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "age", array()), "html", null, true);
        echo " ans</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 70
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
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CV</th>
                <td><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/cvtheque/" . $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "cvCandidat", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "cvCandidat", array()), "html", null, true);
        echo "</a></td>
                ";
        // line 84
        echo "            </tr>
            <tr>
                <th>Commentaires</th>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "commentaire", array()), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-offset-11\">
            <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_resume", array("id" => $this->getAttribute($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "emploi", array()), "id", array()))), "html", null, true);
        echo "\"><i class=\"material-icons\" id=\"previous\">skip_previous</i></a>
        </div>
    </div>
";
        
        $__internal_dd71053f95669d1add217b2c72306c9ada0def0b0eb34542666e1e5f7bc023c9->leave($__internal_dd71053f95669d1add217b2c72306c9ada0def0b0eb34542666e1e5f7bc023c9_prof);

        
        $__internal_1646c42a41df850754dc070c3e516ac00a5fd59b4373df2621d4ec5be4de88d6->leave($__internal_1646c42a41df850754dc070c3e516ac00a5fd59b4373df2621d4ec5be4de88d6_prof);

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
        return array (  240 => 95,  229 => 87,  224 => 84,  218 => 82,  211 => 78,  204 => 74,  193 => 70,  186 => 66,  179 => 62,  172 => 58,  165 => 54,  149 => 43,  140 => 39,  127 => 28,  125 => 27,  121 => 25,  119 => 24,  112 => 19,  106 => 17,  98 => 15,  96 => 14,  90 => 10,  81 => 9,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
        <div class=\" col-lg-5\">
            <h1>{{ candidat.nom|upper }} {{ candidat.prenom }}</h1>
        </div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"{{ path ('ma_lrm_gestion_edit', { 'id': arrCandidat[candidat.id]}) }}\"><i class=\"material-icons\" style=\"margin-left: 40px\">mode_edit</i></a><a href=\"{{ path ('ma_lrm_gestion_delete', { 'id': arrCandidat[candidat.id]}) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat pour ce poste ?')\";><i class=\"material-icons\" style=\"margin-left: 10px\">delete</i></a>
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
        <div class=\"col-lg-offset-11\">
            <a href=\"{{ path('ma_lrm_gestion_resume', { 'id': candidat.emploi.id }) }}\"><i class=\"material-icons\" id=\"previous\">skip_previous</i></a>
        </div>
    </div>
{% endblock %}", "MALrmBundle:Gestion:detail.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Gestion/detail.html.twig");
    }
}
