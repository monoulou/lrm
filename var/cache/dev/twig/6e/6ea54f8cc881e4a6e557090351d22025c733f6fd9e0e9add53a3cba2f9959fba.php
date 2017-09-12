<?php

/* MALrmBundle:Candidat:index.html.twig */
class __TwigTemplate_4baf4a23b59f86c7d7876b0f3c9851475f03d0bb6e5021f363ab7b20d05ea0fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Candidat:index.html.twig", 1);
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
        $__internal_55ea7d4b66db3328bf11c03fc8f5810cf38251d959c4ee45b1e65f7510adbfbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ea7d4b66db3328bf11c03fc8f5810cf38251d959c4ee45b1e65f7510adbfbf->enter($__internal_55ea7d4b66db3328bf11c03fc8f5810cf38251d959c4ee45b1e65f7510adbfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:index.html.twig"));

        $__internal_ead479891df3533f91861ca17d799aaa786c36669c8472144c5eb4015ae1f56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead479891df3533f91861ca17d799aaa786c36669c8472144c5eb4015ae1f56c->enter($__internal_ead479891df3533f91861ca17d799aaa786c36669c8472144c5eb4015ae1f56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55ea7d4b66db3328bf11c03fc8f5810cf38251d959c4ee45b1e65f7510adbfbf->leave($__internal_55ea7d4b66db3328bf11c03fc8f5810cf38251d959c4ee45b1e65f7510adbfbf_prof);

        
        $__internal_ead479891df3533f91861ca17d799aaa786c36669c8472144c5eb4015ae1f56c->leave($__internal_ead479891df3533f91861ca17d799aaa786c36669c8472144c5eb4015ae1f56c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8073fa01271a5b81957b653476065f72ad7fc72e764c3fc69a71971e356b4213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8073fa01271a5b81957b653476065f72ad7fc72e764c3fc69a71971e356b4213->enter($__internal_8073fa01271a5b81957b653476065f72ad7fc72e764c3fc69a71971e356b4213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8432d1ec1624efced6159385df693f9c2892e0c9f1587e76b3d7b3cac15f264d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8432d1ec1624efced6159385df693f9c2892e0c9f1587e76b3d7b3cac15f264d->enter($__internal_8432d1ec1624efced6159385df693f9c2892e0c9f1587e76b3d7b3cac15f264d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_8432d1ec1624efced6159385df693f9c2892e0c9f1587e76b3d7b3cac15f264d->leave($__internal_8432d1ec1624efced6159385df693f9c2892e0c9f1587e76b3d7b3cac15f264d_prof);

        
        $__internal_8073fa01271a5b81957b653476065f72ad7fc72e764c3fc69a71971e356b4213->leave($__internal_8073fa01271a5b81957b653476065f72ad7fc72e764c3fc69a71971e356b4213_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21ac694168172b52f5cf0c131a0d4cefb19d90611de6fd9213f11fdde24e744a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ac694168172b52f5cf0c131a0d4cefb19d90611de6fd9213f11fdde24e744a->enter($__internal_21ac694168172b52f5cf0c131a0d4cefb19d90611de6fd9213f11fdde24e744a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_52cb315023b9ea018032025df0ea47ef0c5e67253e176f22810b62769bc7aed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52cb315023b9ea018032025df0ea47ef0c5e67253e176f22810b62769bc7aed5->enter($__internal_52cb315023b9ea018032025df0ea47ef0c5e67253e176f22810b62769bc7aed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "        <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_52cb315023b9ea018032025df0ea47ef0c5e67253e176f22810b62769bc7aed5->leave($__internal_52cb315023b9ea018032025df0ea47ef0c5e67253e176f22810b62769bc7aed5_prof);

        
        $__internal_21ac694168172b52f5cf0c131a0d4cefb19d90611de6fd9213f11fdde24e744a->leave($__internal_21ac694168172b52f5cf0c131a0d4cefb19d90611de6fd9213f11fdde24e744a_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e99a7747da05f2a83ebaf037c3483a687974d1f629d113789a55229b8f3dcba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e99a7747da05f2a83ebaf037c3483a687974d1f629d113789a55229b8f3dcba->enter($__internal_6e99a7747da05f2a83ebaf037c3483a687974d1f629d113789a55229b8f3dcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56975a3e2a107a80571f655475d8b7d7b07850b040a5f1a342399b1ff29065ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56975a3e2a107a80571f655475d8b7d7b07850b040a5f1a342399b1ff29065ba->enter($__internal_56975a3e2a107a80571f655475d8b7d7b07850b040a5f1a342399b1ff29065ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 24
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 26
        echo "            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Candidat:index.html.twig", 31)->display($context);
        // line 32
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Candidat:index.html.twig", 34)->display($context);
        // line 35
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>LISTE DES CANDIDATS</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES CANDIDATS:</h5>
        </div>

        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 46
            echo "            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> ";
            // line 48
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "<i>alert-info</i>.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
        <div class=\"row\" style=\"margin-top: 20px;\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Candidat</th>
                    <th>Utilisateur</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Candidat</th>
                    <th>Utilisateur</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidats"]) ? $context["candidats"] : $this->getContext($context, "candidats")));
        foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
            // line 74
            echo "                    <tr>
                        <td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_show", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "prenom", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["candidat"], "chargeRecrutement", array()), "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["candidat"], "emploi", array()), "intitule", array()), "html", null, true);
            echo "</td>
                        ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nomClient"]) ? $context["nomClient"] : $this->getContext($context, "nomClient")));
            foreach ($context['_seq'] as $context["idOffre"] => $context["client"]) {
                // line 79
                echo "                            ";
                if (($context["idOffre"] == $this->getAttribute($this->getAttribute($context["candidat"], "emploi", array()), "id", array()))) {
                    // line 80
                    echo "                                <td> ";
                    echo twig_escape_filter($this->env, $context["client"], "html", null, true);
                    echo "</td>
                            ";
                }
                // line 82
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idOffre'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                        <td style=\"text-align: right\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_edit", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\"><i class=\"material-icons\">mode_edit</i></a><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_delete", array("id" => $this->getAttribute($context["candidat"], "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat ?')\";><i class=\"material-icons\">delete</i></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                </tbody>
            </table>
        </div>
    </div>


";
        
        $__internal_56975a3e2a107a80571f655475d8b7d7b07850b040a5f1a342399b1ff29065ba->leave($__internal_56975a3e2a107a80571f655475d8b7d7b07850b040a5f1a342399b1ff29065ba_prof);

        
        $__internal_6e99a7747da05f2a83ebaf037c3483a687974d1f629d113789a55229b8f3dcba->leave($__internal_6e99a7747da05f2a83ebaf037c3483a687974d1f629d113789a55229b8f3dcba_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Candidat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 86,  235 => 83,  229 => 82,  223 => 80,  220 => 79,  216 => 78,  212 => 77,  208 => 76,  200 => 75,  197 => 74,  193 => 73,  169 => 51,  160 => 48,  156 => 46,  152 => 45,  140 => 35,  138 => 34,  134 => 32,  132 => 31,  125 => 26,  119 => 24,  111 => 22,  109 => 21,  103 => 17,  94 => 16,  82 => 11,  77 => 10,  68 => 9,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
            <h3>LISTE DES CANDIDATS</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES CANDIDATS:</h5>
        </div>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> {{ flash_message }}<i>alert-info</i>.
            </div>
        {% endfor %}

        <div class=\"row\" style=\"margin-top: 20px;\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Candidat</th>
                    <th>Utilisateur</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Candidat</th>
                    <th>Utilisateur</th>
                    <th>Offre d'emploi</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                {% for candidat in candidats %}
                    <tr>
                        <td><a href=\"{{ path('ma_lrm_candidat_show', { 'id': candidat.id }) }}\">{{ candidat.nom }} {{ candidat.prenom }}</a></td>
                        <td>{{ candidat.chargeRecrutement.username }}</td>
                        <td>{{ candidat.emploi.intitule }}</td>
                        {% for idOffre, client in nomClient %}
                            {% if idOffre == candidat.emploi.id      %}
                                <td> {{ client }}</td>
                            {% endif %}
                        {% endfor %}
                        <td style=\"text-align: right\"><a href=\"{{ path ('ma_lrm_candidat_edit', { 'id': candidat.id }) }}\"><i class=\"material-icons\">mode_edit</i></a><a href=\"{{ path ('ma_lrm_candidat_delete', { 'id': candidat.id }) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat ?')\";><i class=\"material-icons\">delete</i></a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>


{% endblock %}", "MALrmBundle:Candidat:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Candidat/index.html.twig");
    }
}
