<?php

/* MALrmBundle:Emploi:index.html.twig */
class __TwigTemplate_afd873a04fabff9db31f43a0cb15f489365b3210454df2b69cc3fd8b3c3e393b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Emploi:index.html.twig", 1);
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
        $__internal_a225dbc35951aac4a53540543d98a139684cb877d07078405d3f90ae0babdb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a225dbc35951aac4a53540543d98a139684cb877d07078405d3f90ae0babdb63->enter($__internal_a225dbc35951aac4a53540543d98a139684cb877d07078405d3f90ae0babdb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:index.html.twig"));

        $__internal_41a039b85ed985029485be9fd51001aae109c77277fb64054a2f26f9917708d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a039b85ed985029485be9fd51001aae109c77277fb64054a2f26f9917708d6->enter($__internal_41a039b85ed985029485be9fd51001aae109c77277fb64054a2f26f9917708d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a225dbc35951aac4a53540543d98a139684cb877d07078405d3f90ae0babdb63->leave($__internal_a225dbc35951aac4a53540543d98a139684cb877d07078405d3f90ae0babdb63_prof);

        
        $__internal_41a039b85ed985029485be9fd51001aae109c77277fb64054a2f26f9917708d6->leave($__internal_41a039b85ed985029485be9fd51001aae109c77277fb64054a2f26f9917708d6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec70efeeb09cde9d066cdd387f79d4450c2660f3a195bd8dbbc7c08f4607f155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec70efeeb09cde9d066cdd387f79d4450c2660f3a195bd8dbbc7c08f4607f155->enter($__internal_ec70efeeb09cde9d066cdd387f79d4450c2660f3a195bd8dbbc7c08f4607f155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_00805864bebd7c2187b0f02aae6d14bb2ec26f1386f027b1cb7bbad012eadbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00805864bebd7c2187b0f02aae6d14bb2ec26f1386f027b1cb7bbad012eadbbd->enter($__internal_00805864bebd7c2187b0f02aae6d14bb2ec26f1386f027b1cb7bbad012eadbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_00805864bebd7c2187b0f02aae6d14bb2ec26f1386f027b1cb7bbad012eadbbd->leave($__internal_00805864bebd7c2187b0f02aae6d14bb2ec26f1386f027b1cb7bbad012eadbbd_prof);

        
        $__internal_ec70efeeb09cde9d066cdd387f79d4450c2660f3a195bd8dbbc7c08f4607f155->leave($__internal_ec70efeeb09cde9d066cdd387f79d4450c2660f3a195bd8dbbc7c08f4607f155_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e064f9a406c1f6835eeedda0f15cd71cd0885bb8653941882e31a4494123bfe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e064f9a406c1f6835eeedda0f15cd71cd0885bb8653941882e31a4494123bfe8->enter($__internal_e064f9a406c1f6835eeedda0f15cd71cd0885bb8653941882e31a4494123bfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d1c0064503081c1f809031efeaca2b92409c8100af761019b6f26623ea5bf4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c0064503081c1f809031efeaca2b92409c8100af761019b6f26623ea5bf4dd->enter($__internal_d1c0064503081c1f809031efeaca2b92409c8100af761019b6f26623ea5bf4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_d1c0064503081c1f809031efeaca2b92409c8100af761019b6f26623ea5bf4dd->leave($__internal_d1c0064503081c1f809031efeaca2b92409c8100af761019b6f26623ea5bf4dd_prof);

        
        $__internal_e064f9a406c1f6835eeedda0f15cd71cd0885bb8653941882e31a4494123bfe8->leave($__internal_e064f9a406c1f6835eeedda0f15cd71cd0885bb8653941882e31a4494123bfe8_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_132c542c3f2ba04fc1baf463fc35d22b82c46d9816ee4bc9015c07e1a1e8f0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132c542c3f2ba04fc1baf463fc35d22b82c46d9816ee4bc9015c07e1a1e8f0f8->enter($__internal_132c542c3f2ba04fc1baf463fc35d22b82c46d9816ee4bc9015c07e1a1e8f0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7439e5804d7a5edd5be9a4d39ea4d35eb332bf0728915e1d0990dc6986bcfa2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7439e5804d7a5edd5be9a4d39ea4d35eb332bf0728915e1d0990dc6986bcfa2c->enter($__internal_7439e5804d7a5edd5be9a4d39ea4d35eb332bf0728915e1d0990dc6986bcfa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 23
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 25
        echo "            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 30
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Emploi:index.html.twig", 30)->display($context);
        // line 31
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 33
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Emploi:index.html.twig", 33)->display($context);
        // line 34
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>LISTE DES OFFRES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES OFFRES EXISTANTES:</h5>
        </div>

        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 45
            echo "            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> ";
            // line 47
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "<i>alert-info</i>.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        <div class=\"row\" style=\"margin-top: 20px\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Intitulé du poste</th>
                    <th>Entreprise</th>
                    <th>Contrat</th>
                    <th>Lieux d'activité</th>
                    <th>Nombre de postes</th>
                    <th>Site de parution</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Intitulé du poste</th>
                    <th>Entreprise</th>
                    <th>Contrat</th>
                    <th>Lieux d'activité</th>
                    <th>Nombre de poste</th>
                    <th>Site de parution</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emplois"]) ? $context["emplois"] : $this->getContext($context, "emplois")));
        foreach ($context['_seq'] as $context["_key"] => $context["emploi"]) {
            // line 77
            echo "                    <tr>
                        <td><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_show", array("id" => $this->getAttribute($context["emploi"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "intitule", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["emploi"], "client", array()), "denomination", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "contrat", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "villeCodePostal", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "villeActivite", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["emploi"], "nombrePoste", array()), "html", null, true);
            echo "</td>
                        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["siteParution"]) ? $context["siteParution"] : $this->getContext($context, "siteParution")));
            foreach ($context['_seq'] as $context["index"] => $context["site"]) {
                // line 84
                echo "                            ";
                if (($context["index"] == $this->getAttribute($context["emploi"], "id", array()))) {
                    // line 85
                    echo "                                <td>";
                    echo twig_escape_filter($this->env, $context["site"], "html", null, true);
                    echo "</td>
                            ";
                }
                // line 87
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['site'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                        <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_edit", array("id" => $this->getAttribute($context["emploi"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>/<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_delete", array("id" => $this->getAttribute($context["emploi"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de cette offre ?')\";>Supprimer</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emploi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
                </tbody>
            </table>
        </div>
    </div>



";
        
        $__internal_7439e5804d7a5edd5be9a4d39ea4d35eb332bf0728915e1d0990dc6986bcfa2c->leave($__internal_7439e5804d7a5edd5be9a4d39ea4d35eb332bf0728915e1d0990dc6986bcfa2c_prof);

        
        $__internal_132c542c3f2ba04fc1baf463fc35d22b82c46d9816ee4bc9015c07e1a1e8f0f8->leave($__internal_132c542c3f2ba04fc1baf463fc35d22b82c46d9816ee4bc9015c07e1a1e8f0f8_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Emploi:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 91,  247 => 88,  241 => 87,  235 => 85,  232 => 84,  228 => 83,  224 => 82,  218 => 81,  214 => 80,  210 => 79,  204 => 78,  201 => 77,  197 => 76,  169 => 50,  160 => 47,  156 => 45,  152 => 44,  140 => 34,  138 => 33,  134 => 31,  132 => 30,  125 => 25,  119 => 23,  111 => 21,  109 => 20,  103 => 16,  94 => 15,  82 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
     <link href=\"{{ asset ('DataTables/media/css/dataTables.bootstrap.min.css') }}\" rel='stylesheet' type='text/css' />
 {% endblock %}

{% block javascripts %}
    <script src =\"{{ asset ('DataTables/media/js/dataTables.bootstrap.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/tables.js') }}\" type=\"text/javascript\"></script>
{% endblock %}



{% block body %}

    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    Connecté en tant que {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
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
            <h3>LISTE DES OFFRES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES OFFRES EXISTANTES:</h5>
        </div>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> {{ flash_message }}<i>alert-info</i>.
            </div>
        {% endfor %}

        <div class=\"row\" style=\"margin-top: 20px\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Intitulé du poste</th>
                    <th>Entreprise</th>
                    <th>Contrat</th>
                    <th>Lieux d'activité</th>
                    <th>Nombre de postes</th>
                    <th>Site de parution</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Intitulé du poste</th>
                    <th>Entreprise</th>
                    <th>Contrat</th>
                    <th>Lieux d'activité</th>
                    <th>Nombre de poste</th>
                    <th>Site de parution</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                {% for emploi in emplois %}
                    <tr>
                        <td><a href=\"{{ path('ma_lrm_emploi_show', { 'id': emploi.id }) }}\">{{ emploi.intitule }}</a></td>
                        <td>{{ emploi.client.denomination }}</td>
                        <td>{{ emploi.contrat }}</td>
                        <td>{{ emploi.villeCodePostal }} - {{ emploi.villeActivite}}</td>
                        <td>{{ emploi.nombrePoste }}</td>
                        {% for index, site in siteParution %}
                            {% if index == emploi.id %}
                                <td>{{ site }}</td>
                            {% endif %}
                        {% endfor %}
                        <td><a href=\"{{ path ('ma_lrm_emploi_edit', { 'id': emploi.id }) }}\">Modifier</a>/<a href=\"{{ path ('ma_lrm_emploi_delete', { 'id': emploi.id }) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de cette offre ?')\";>Supprimer</a></td>
                    </tr>
                {% endfor %}

                </tbody>
            </table>
        </div>
    </div>



{% endblock %}", "MALrmBundle:Emploi:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Emploi/index.html.twig");
    }
}
